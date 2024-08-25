    
  <main class='pt-5 mt-5'>
    <div class="calendar">
        <div class="text-center">
            <h3>Tarefas</h3>
            <button class="btn btn-primary" onclick="changeMonth(-1)">&#9664; Mês Anterior</button>
            <span id="monthYear" class="mx-3"></span>
            <button class="btn btn-primary" onclick="changeMonth(1)">Mês Seguinte &#9654;</button>
            <br><a class="btn btn-sm" href='<?=root('tarefas/lista')?>'>Hoje</a>
    </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Dom</th>
                    <th>Seg</th>
                    <th>Ter</th>
                    <th>Qua</th>
                    <th>Qui</th>
                    <th>Sex</th>
                    <th>Sáb</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div class="container bg-light p-3">
    <ul class="list-group">
    <?php foreach ($tarefas as $tarefa): ?>
      <li class="list-group-item">
        <?php if($tarefa->cliente()): ?>
            <a href="<?=root('clientes/dados?id='.$tarefa->cliente()->id)?>"> <?=$tarefa->cliente()->nome ?></a>
        <?php endif; ?>
        <?php if($tarefa->processo()): ?>
            <a href="<?=root('processos/dados?id='.$tarefa->processo()->id)?>"> <?=$tarefa->processo()->numero ?> </a>
        <?php endif; ?><br>
        <?=$tarefa->descricao?>
      </li> 
    <?php endforeach; ?>
    </ul>
</div>

</main>
<style>
        .calendar {
            max-width: 800px;
            margin: auto;
        }
        .calendar table {
            width: 100%;
            border-collapse: collapse;
        }
        .calendar th, .calendar td {
            text-align: center;
            padding: 8px;
            position: relative;
        }
        .calendar th {
            background-color: #f4f4f4;
        }
        .today {
            background-color: #d0e0f0;
        }
        .highlight {
            background-color: #fff;
        }
        .highlight::after {
            content: '';
            display: block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #4caf50; /* Verde para o marcador */
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
        }
        .clickable-cell {
            cursor: pointer;
        }
        .clickable-cell:hover {
            background-color: #e0e0e0;
        }
    </style>
    
    <script>
        <?php if(request('data')):?>
            const today = new Date("<?=request('data')?>");
        <?php else:?>
            const today = new Date();
        <?php endif;?>

        let currentYear = today.getFullYear();
        let currentMonth = today.getMonth();

        function renderCalendar(year, month) {
            const monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
                                "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

            const date = new Date(year, month, 1);
            const firstDay = date.getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            document.getElementById("monthYear").textContent = `${monthNames[month]} ${year}`;
            
            const tbody = document.querySelector(".calendar tbody");
            tbody.innerHTML = "";

            let row = document.createElement("tr");
            for (let i = 0; i < firstDay; i++) {
                row.appendChild(document.createElement("td"));
            }

            for (let day = 1; day <= daysInMonth; day++) {
                if (row.children.length === 7) {
                    tbody.appendChild(row);
                    row = document.createElement("tr");
                }
                const cell = document.createElement("td");

                // Create a link element
                const link = document.createElement("a");
                link.textContent = day;
                link.classList.add("clickable-cell");
                link.href = `?data=${year}-${month+1}-${day}`;

                // Check if it's today
                if (year === today.getFullYear() && month === today.getMonth() && day === today.getDate()) {
                    link.classList.add("today");
                }

                cell.appendChild(link);
                row.appendChild(cell);
            }

            while (row.children.length < 7) {
                row.appendChild(document.createElement("td"));
            }
            tbody.appendChild(row);
        }

        function changeMonth(offset) {
            currentMonth += offset;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            } else if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            renderCalendar(currentYear, currentMonth);
        }

        // Initialize calendar on page load
        renderCalendar(currentYear, currentMonth);
    </script>


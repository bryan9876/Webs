var idCount = 1;
const data = [];

document.addEventListener("DOMContentLoaded", () => {
    // ID del formulario donde vamos a extraer los datos
    const formulario = document.getElementById("formulario");

    // Inputs correctos
    const txt_task = document.getElementById("txt_task");
    const txt_description = document.getElementById("txt_description");
    const listaDatos = document.getElementById("hero");

    formulario.addEventListener("submit", (e) => {
        e.preventDefault();

        // ✅ Usa las variables correctas
        const task = txt_task.value.trim();
        //VER POR QUE NO ASEPTA EL VALUE
        const description = txt_description.value.trim();

        const newTask = {
            id: idCount++,
            task: task,
            description: description,
            status: true,
        };

        data.push(newTask);
        data.map((taskItem) => {
            const nuevoElemento = taskItem.status?
            `<div class="hero_task">
                <div class="indicador"></div>
                <div class="group_label">
                    <p id="mostrar-task" class="task_title">
                    ${taskItem.task}</p>
                    <p id="mostrar-description" class="task_description">
                    ${taskItem.description}</p>
                </div>
                <div class="group_button">
                    <button class="hero_complate">V</button>
                    <button class="hero_delete">X</button>
                </div>
             </div>`:
             `<div class="hero_task">
                <div class="indicador_pendiente"></div>
                <div class="group_label">
                    <p id="mostrar-task" class="task_title">
                    ${taskItem.task}</p>
                    <p id="mostrar-description" class="task_description">
                    ${taskItem.description}</p>
                </div>
                <div class="group_button">
                    <button type="submit" class="hero_complate">V</button>
                    <button type="submit" class="hero_delete">X</button>
                </div>
              </div>`;
              listaDatos.innerHTML+=nuevoElemento;
        });

        // Limpiar campos después de agregar la tarea
        txt_task.value = "";
        txt_description.value = "";
    });
});

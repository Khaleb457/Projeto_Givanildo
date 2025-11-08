// Localize as variáveis no topo do seu menu.js
const taskModal = document.getElementById('taskModalOverlay');
// Seleciona o botão "+ Tarefas" (o segundo item na lista 'Adicionar Item')
const openTaskBtn = document.querySelector('.add-options .add-item:nth-child(2)'); 
const closeTaskModalBtn = document.getElementById('closeTaskModal');
const saveTaskIcon = document.getElementById('saveTaskIcon'); 
const submitTaskForm = document.getElementById('submitTaskBtn');

// --- Funções do Modal de Tarefas ---

// 1. ABRIR MODAL
if (openTaskBtn) {
    openTaskBtn.addEventListener('click', () => {
        taskModal.classList.add('visible');
    });
}

// 2. FECHAR MODAL (Sair)
if (closeTaskModalBtn) {
    closeTaskModalBtn.addEventListener('click', () => {
        taskModal.classList.remove('visible');
    });
}

// 3. FECHAR MODAL (Overlay escuro)
if (taskModal) {
    taskModal.addEventListener('click', (e) => {
        if (e.target === taskModal) {
            taskModal.classList.remove('visible');
        }
    });
}

// 4. LIGAR ÍCONE SALVAR ao FORM SUBMIT
if (saveTaskIcon && submitTaskForm) {
    saveTaskIcon.addEventListener('click', (event) => {
        event.preventDefault(); 
        console.log("Submit de Tarefa disparado!");
        submitTaskForm.click();
    });
}
document.addEventListener('DOMContentLoaded', () => {
    const input = document.getElementById('backlogSearchInput');
    const form = document.getElementById('backlogSearchForm');
    const priority = document.getElementById('prioritySelect');
    const status = document.getElementById('statusSelect');

    if (!form) return;

    let timeout = null;

    ///Search 
    if (input) {
        input.addEventListener('input', () => {
            clearTimeout(timeout);

            timeout = setTimeout(() => {
                form.submit();
            }, 400);
        });

        
        if (input.value.trim() !== '') {
            input.focus();
            const val = input.value;
            input.value = '';
            input.value = val;
        }
    }

    ///Priority 
    if (priority) {
        priority.addEventListener('change', () => {
            form.submit();
        });
    }

    ////Status 
    if (status) {
        status.addEventListener('change', () => {
            form.submit();
        });
    }
});







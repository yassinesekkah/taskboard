document.addEventListener('DOMContentLoaded', () => {
    if (!window.tasksByStatus) return;

    const ctx = document.getElementById('tasksStatusChart');
    if (!ctx) return;

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Todo', 'In Progress', 'Done'],
            datasets: [{
                label: 'Tasks',
                data: [
                    window.tasksByStatus.todo,
                    window.tasksByStatus.in_progress,
                    window.tasksByStatus.done
                ],
                backgroundColor: [
                    '#94a3b8',
                    '#60a5fa',
                    '#22c55e'
                ],
                borderRadius: 6
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            }
        }
    });
});

///priority chart
document.addEventListener('DOMContentLoaded', () => {
    if (!window.tasksByPriority) return;

    const ctxPriority = document.getElementById('tasksPriorityChart');
    if (!ctxPriority) return;

    new Chart(ctxPriority, {
        type: 'doughnut',
        data: {
            labels: ['Low', 'Medium', 'High'],
            datasets: [{
                data: [
                    window.tasksByPriority.low,
                    window.tasksByPriority.medium,
                    window.tasksByPriority.high
                ],
                backgroundColor: [
                    '#22c55e', // green
                    '#facc15', // yellow
                    '#ef4444'  // red
                ],
                borderWidth: 0
            }]
        },
        options: {
            cutout: '65%',
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        boxWidth: 12,
                        padding: 16
                    }
                }
            }
        }
    });
});


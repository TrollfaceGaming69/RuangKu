function filterData(status, element) {

    const buttons = document.querySelectorAll('.btn-filter');
    buttons.forEach(btn => btn.classList.remove('active'));
    element.classList.add('active');

    const items = document.querySelectorAll('.booking-item');
    const emptyState = document.getElementById('empty-state');
    let visibleCount = 0;

    items.forEach(item => {
        if (status === 'all' || item.classList.contains(status)) {
            item.style.display = 'block';
            visibleCount++;
        } else {
            item.style.display = 'none';
        }
    });

    if (visibleCount === 0) {
        emptyState.style.display = 'flex'; 
    } else {
        emptyState.style.display = 'none'; 
    }
}

function filterData(status, element) {
    document.querySelectorAll('.btn-filter').forEach(btn => btn.classList.remove('active'));
    element.classList.add('active');

    const items = document.querySelectorAll('.booking-item');
    const emptyState = document.getElementById('empty-state');
    let found = 0;

    items.forEach(item => {
        if (status === 'all' || item.classList.contains(status)) {
            item.style.display = 'block';
            found++;
        } else {
            item.style.display = 'none';
        }
    });

    emptyState.style.display = (found === 0) ? 'flex' : 'none';
}
document.querySelectorAll('.form-check-input').forEach(input => {
    input.addEventListener('click', () => {
        document.querySelectorAll('.form-check-label').forEach(label => label.classList.remove('fw-bold', 'text-warning'));
        input.nextElementSibling.classList.add('fw-bold', 'text-warning');
    });
});

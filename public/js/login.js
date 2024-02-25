document.getElementById('formLogin').addEventListener('submit', function(event) {
    event.preventDefault();
    var nome = document.getElementById('nome').value;
    document.getElementById('user').value = nome;
    this.submit();
});
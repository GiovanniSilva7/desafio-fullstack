document.addEventListener('DOMContentLoaded', function() {
    const dropZone = document.getElementById('drop-zone');

    // Prevenir o comportamento padrão de arrastar e soltar
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    // Adicionar ou remover a classe de destaque ao entrar ou sair com um arquivo
    ['dragenter', 'dragover'].forEach(eventName => {
        dropZone.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, unhighlight, false);
    });

    function highlight(e) {
        dropZone.classList.add('highlight');
    }

    function unhighlight(e) {
        dropZone.classList.remove('highlight');
    }

    // Manipular o evento de soltar o arquivo
    dropZone.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        let dt = e.dataTransfer;
        let files = dt.files;
        handleFiles(files);
    }

    function handleFiles(files) {
        ([...files]).forEach((f) => uploadFile(f));
    }

    function uploadFile(file) {

        let fileToServer = file.files[0];
        const formData = new FormData();
        formData.append('file', fileToServer);

        const csrfToken = document.querySelector('meta[name="csrf--token"]')
    
        var request = {
            imageType: 2,
            file: formData
        }

        fetch('/api/store', {
            method: 'POST',
            body: request
        })
        .then(response => response.json())
        .then(data => console.log('Success:', data))
        .catch((error) => console.error('Error:', error));
    }
});

/*document.getElementById('logDeAlteracoes').addEventListener('click', function() {
    window.location.href = "{{ route('edit-dashboard') }}";
});*/

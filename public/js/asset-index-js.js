// upload image js

const dropArea = document.getElementById('drop-area');
const fileInput = document.getElementById('file');
const fileInfo = document.getElementById('file-info');
const fileName = document.getElementById('file-name');
const fileSize = document.getElementById('file-size');
const fileIcon = document.getElementById('file-icon');

// Prevent default behavior for drag-and-drop
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false);
});

function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
}

// Highlight the drop area when a file is dragged over it
['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, () => dropArea.classList.add('dragover'), false);
});

['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, () => dropArea.classList.remove('dragover'), false);
});

// Handle dropped files
dropArea.addEventListener('drop', handleDrop, false);

function handleDrop(e) {
    const dt = e.dataTransfer;
    const files = dt.files;
    handleFiles(files);
}

// Handle file selection via file input
fileInput.addEventListener('change', (e) => {
    const files = e.target.files;
    handleFiles(files);
});

dropArea.addEventListener('click', () => fileInput.click());

function handleFiles(files) {
    const file = files[0];
    if (file) {
        fileName.textContent = file.name;
        fileSize.textContent = `${(file.size / 1024).toFixed(2)} KB`;

        // Determine the file type and change icon accordingly
        const fileType = file.type;
        if (fileType.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = (e) => {
                fileIcon.innerHTML =
                    `<img src="${e.target.result}" alt="${file.name}"border class="w-8 h-8 object-cover rounded">`;
            };
            reader.readAsDataURL(file);
        } else {
            let iconClass;
            switch (fileType) {
                case 'application/pdf':
                    iconClass = 'fas fa-file-pdf text-red-600 text-3xl';
                    break;
                case 'application/msword':
                case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                    iconClass = 'fas fa-file-word text-blue-600 text-3xl';
                    break;
                case 'application/vnd.ms-excel':
                case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
                    iconClass = 'fas fa-file-excel text-green-600 text-3xl';
                    break;
                case 'application/vnd.ms-powerpoint':
                case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
                    iconClass = 'fas fa-file-powerpoint text-orange-600 text-3xl';
                    break;
                case 'audio/mpeg':
                case 'audio/ogg':
                case 'audio/wav':
                    iconClass = 'fas fa-file-audio text-green-600 text-3xl';
                    break;
                case 'video/mp4':
                case 'video/ogg':
                case 'video/webm':
                    iconClass = 'fas fa-file-video text-purple-600 text-3xl';
                    break;
                case 'text/plain':
                case 'text/html':
                    iconClass = 'fas fa-file-alt text-gray-600 text-3xl';
                    break;
                default:
                    iconClass = 'fas fa-file text-gray-600 text-3xl';
                    break;
            }
            fileIcon.innerHTML = `<i class="${iconClass}"></i>`;
        }

        fileInfo.classList.remove('hidden');
    }
}
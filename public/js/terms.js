// script for adding Entry ------ addEntry
var metadataCount = 1; // Counter for tracking metadata inputs

function addInputSet() {
    var inputSet = createInputSet();
    $('#inputContainer').append(inputSet);
}

function createInputSet() {
    var outerDiv = $('<div class="border-2 border-gray-500 p-4 m-2 rounded-md "></div>');
    var innerDiv = $('<div class="flex gap-4"></div>');
    var inputSet = $('<div class="mb-4 w-1/4"></div>');
    var nameInput = $('<div class="mb-4 w-3/4"></div>');
    var contentInput = $('<div class="mb-4"></div>');

    var tagType = $(
        `
                <label class="block text-gray-700 text-sm font-bold mb-2">Tag Type</label>
                <select class="tag-type shadow appearance-none border rounded bg-white w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Select Option..." name="tagType[]">
                    <option value="name">name</option>
                    <option value="http-equiv">http-equiv</option>
                    <option value="charset">charset</option>
                    <option value="itemprop">itemprop</option>
                    <option value="property">property</option>
                </select>
                `
    );

    var nameVal = $(
        `
                <label class="block text-gray-700 text-sm font-bold mb-2">Name Value</label>
                <input class="name-value shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Name" name="nameValue[]">
                `
    ).addClass('hidden');

    var content = $(
        `
                <label class="block text-gray-700 text-sm font-bold mb-2">Content Attribute</label>
                <input class="content-attribute shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Content" name="contentAttribute[]">
                `
    ).addClass('hidden');

    inputSet.append(tagType);
    nameInput.append(nameVal);
    contentInput.append(content);

    tagType.change(function () {
        if ($(this).val() !== '') {
            nameVal.removeClass('hidden');
        } else {
            nameVal.addClass('hidden');
            nameVal.val('');
        }
    });

    nameVal.on('keyup', function () {
        if ($(this).val() !== '') {
            content.removeClass('hidden');
        } else {
            content.addClass('hidden');
            content.val('');
        }
    });

    // Assign unique identifiers to each input
    tagType.addClass('metadata-tag-type-' + metadataCount);
    nameVal.addClass('metadata-name-value-' + metadataCount);
    content.addClass('metadata-content-' + metadataCount);

    metadataCount++; // Increment metadata counter for the next input

    innerDiv.append(inputSet);
    innerDiv.append(nameInput);

    outerDiv.append(innerDiv);
    outerDiv.append(contentInput);

    return outerDiv;
}

$(document).ready(function () {
    // Initial input set
    var initialInputSet = createInputSet();
    $('#inputContainer').append(initialInputSet);

    $('#field_title').on('input', function () {
        let titleValue = $(this).val();
        let handleValue = titleValue.toLowerCase().replace(/[^a-z0-9]+/g, '-');
        $('#field_slug').val(handleValue);
    });

    $('#addMoreTags').click(function () {
        event.preventDefault();
        let newInputSet = createInputSet();
        $('#inputContainer').append(newInputSet);
    });

    $('#myForm').submit(function () {
        event.preventDefault()
        // let ispublished = $('#field_publish').attr('aria-pressed') === 'true'
        let isenabled = $('#field_enabled').attr('aria-pressed') === 'true'

        $('#enableState').val(isenabled ? '1' : '0')

        if (!isenabled) {
            let swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: `bg-green-500 text-white font-bold py-2 px-4 rounded`,
                    cancelButton: `bg-red-500 text-white font-bold py-2 px-4 rounded`
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: `Disabling this item will exclude Meta Data from it`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, I'm sure!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire({
                        title: "Creatinggg!",
                        text: "Command Accepted",
                        icon: "success"
                    });
                    // $('#publishState').val(ispublished ? '1' : '0')
                    $(this).unbind('submit').submit()
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelled",
                        text: `Command Cancelled`,
                        icon: "error"
                    });
                    return;
                }
            });
        } else {
            // $('#publishState').val(ispublished ? '1' : '0')
            $(this).unbind('submit').submit()
        }
    });
});

// Script for editing Entry ------- editEntry

// Function to generate input fields based on tagType count
function generateInputFields(tagTypeCount) {
    console.log(`Count ${tagTypeCount}`);
    $('#inputContainer').empty(); // Clear existing input fields
    for (var i = 0; i < tagTypeCount; i++) {
        $('#inputContainer').append(createEditInputSet(i));
    }
}
// Function to create input set
function createEditInputSet(index) {
    var outerDiv = $('<div class="border-2 border-gray-500 p-4 m-2 rounded-md "></div>');
    var innerDiv = $('<div class="flex gap-4"></div>');
    var inputSet = $('<div class="mb-4 w-1/4"></div>');
    var nameInput = $('<div class="mb-4 w-3/4"></div>');
    var contentInput = $('<div class="mb-4"></div>');

    var tagType = $(
        `
                    <label class="block text-gray-700 text-sm font-bold mb-2">Tag Type</label>
                    <select class="tag-type shadow appearance-none border rounded bg-white w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Select Option..." name="tagType[]">
                        <option value="name">name</option>
                        <option value="http-equiv">http-equiv</option>
                        <option value="charset">charset</option>
                        <option value="itemprop">itemprop</option>
                        <option value="property">property</option>
                    </select>
                    `
    );

    var nameVal = $(
        `
                    <label class="block text-gray-700 text-sm font-bold mb-2">Name Value</label>
                    <input class="name-value shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Name" name="nameValue[]">
                    `
    );

    var content = $(
        `
                    <label class="block text-gray-700 text-sm font-bold mb-2">Content Attribute</label>
                    <input class="content-attribute shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Content" name="contentAttribute[]">
                    `
    );

    inputSet.append(tagType);
    nameInput.append(nameVal);
    contentInput.append(content);

    // Assign unique identifiers to each input
    tagType.addClass('metadata-tag-type-' + metadataCount);
    nameVal.addClass('metadata-name-value-' + metadataCount);
    content.addClass('metadata-content-' + metadataCount);

    metadataCount++; // Increment metadata counter for the next input

    innerDiv.append(inputSet);
    innerDiv.append(nameInput);

    outerDiv.append(innerDiv);
    outerDiv.append(contentInput);

    // Populate existing data if available
    var metaData = existingMetaData[index] || {};
    if (metaData.tagType) {
        tagType.val(metaData.tagType);
        nameVal.val(metaData.nameValue);
        content.val(metaData.contentAttribute);
    }

    return outerDiv;
}

// Initial generation of input fields based on existing data
$(document).ready(function () {
    console.log(`Count ${existingMetaData}`);
    var tagTypeCount = Object.keys(existingMetaData).length;
    generateInputFields(tagTypeCount);
});


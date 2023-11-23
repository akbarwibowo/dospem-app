@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <style>
        <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
    </style>
    <title>NewQuestion</title>
</head>
<body>
    {{-- <button type="button" id="addQuestionButton">{{ _('Tambah Pertanyaan') }}</button> --}}

    <div class="formsContainer">
        <form class="radioForm" action="{{ route('add') }}" method="POST">
            @csrf
            {{-- <div class="radioForm"> --}}
                <label for="questionText">{{ _('Pertanyaan') }}</label><br>
                <input type="text" id="questionText" name="question">
                <br>
                <h5>Semester</h5>
                <input type="radio" id="semester4" name="semester" value="4">4
                <input type="radio" id="semester5" name="semester" value="5">5
                <input type="radio" id="semester6" name="semester" value="6">6
                <br>
                <br>
                <h5>Jenis</h5>
                <input type="radio" id="software" name="type" value="software">RPL<br>
                <input type="radio" id="networking" name="type" value="networking">Jaringan Komputer<br>
                <input type="radio" id="multimedia" name="type" value="multimedia">Multimedia
                <br>
                <button type="button" class="remove-question">{{ ('Hapus Pertanyaan') }}</button><br>
    
                {{-- <label for="options">Pilihan:</label>
                <div class="options">
                    <div class="option">
                        <label for="radioOption0">Opsi 1:</label>
                        <input type="radio" id="radioOption0" name="radioOptions0" value="">
                        <input type="text" name="textOptions" value="">
                        <button type="button" class="remove-option">Hapus</button>
                    </div>
                </div> --}}
    
                {{-- <button type="button" class="addOptionButton">Tambah Pilihan</button><br> --}}
            {{-- </div> --}}
            <button type="submit">{{ _('Add') }}</button>
        </form>
    </div>

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const addQuestionButton = document.getElementById("addQuestionButton");
            const formsContainer = document.getElementById("formsContainer");

            addQuestionButton.addEventListener("click", addNewQuestion);

            function addNewQuestion() {
                const newForm = document.querySelector('.radioForm').cloneNode(true);
                formsContainer.appendChild(newForm);

                // const questionText = newForm.querySelector("#questionText");
                // const optionInputs = newForm.querySelectorAll('input[name="textOptions"]');
                // questionText.value = "";

                // optionInputs.forEach((input, index) => {
                //     input.value = "";
                //     input.name = `textOptions${index}`;
                // });

                // const removeButtons = newForm.querySelectorAll(".remove-option");
                // removeButtons.forEach((removeButton) => {
                //     removeButton.addEventListener("click", () => removeOption(removeButton));
                // });

                // const addOptionButtons = newForm.querySelectorAll(".addOptionButton");
                // addOptionButtons.forEach((addButton) => {
                //     addButton.addEventListener("click", () => addOption(addButton));
                // });

                const removeQuestionButton = newForm.querySelector(".remove-question");
                removeQuestionButton.addEventListener("click", () => removeQuestion(newForm));
            }

            function removeOption(removeButton) {
                const optionDiv = removeButton.parentElement;
                const optionsDiv = optionDiv.parentElement;
                optionsDiv.removeChild(optionDiv);
            }

            function addOption(addButton) {
                const optionsDiv = addButton.parentElement.querySelector(".options");
                const optionIndex = optionsDiv.getElementsByClassName("option").length;
                const option = document.createElement("div");
                option.classList.add("option");
                option.innerHTML = `
                    <label for="radioOption${optionIndex}">Opsi ${optionIndex + 1}:</label>
                    <input type="radio" id="radioOption${optionIndex}" name="radioOptions${optionIndex}" value="">
                    <input type="text" name="textOptions" value="">
                    <button type="button" class="remove-option">Hapus</button>
                `;
                optionsDiv.appendChild(option);

                const removeButtons = optionsDiv.querySelectorAll(".remove-option");
                removeButtons.forEach((removeButton) => {
                    removeButton.addEventListener("click", () => removeOption(removeButton));
                });
            }

            function removeQuestion(form) {
                const forms = document.querySelectorAll('.radioForm');
                if (forms.length > 1) {
                    formsContainer.removeChild(form);
                } else {
                    alert("Anda tidak dapat menghapus formulir terakhir.");
                }
            }

            // Tambahan: Mengaktifkan fungsi Add Option dan Remove pada form pertama
            const addOptionButtons = document.querySelectorAll(".addOptionButton");
            addOptionButtons.forEach((addButton) => {
                addButton.addEventListener("click", () => addOption(addButton));
            });

            const removeQuestionButtons = document.querySelectorAll(".remove-question");
            removeQuestionButtons.forEach((removeButton) => {
                removeButton.addEventListener("click", () => removeQuestion(removeButton.parentElement));
            });
        });
    </script> --}}
    <script src=""></script>
</body>
</html>
@endsection
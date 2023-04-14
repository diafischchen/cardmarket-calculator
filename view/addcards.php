<form id="add-card-form">

    <label for="card-link">
        Karten-Link
        <input id="card-link" name="cardlink" placeholder="https://www.cardmarket.com/example" />
    </label>

    <button type="submit" id="add-card-submit">Hinzufügen</button>

</form>

<hr />
<div style="margin-top: 80px;"></div>

<script>

const form = document.getElementById('add-card-form')
const cardLinkInput = document.getElementById('card-link')
const submitButton = document.getElementById('add-card-submit')

form.addEventListener('submit', function(e) {
    e.preventDefault()
    cardLinkInput.value = ''
    submitButton.setAttribute('aria-busy', 'true')
})

</script>
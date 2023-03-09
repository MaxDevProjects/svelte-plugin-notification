<script>
import AdminCustomNotification from "./AdminCustomNotification.svelte";
$: customColor = "#EA80FC";
let isCheckedDisplayLastArticles = false;
</script>

<form>
    <div class="checkbox_form_container">
        <div>
            <input bind:checked={isCheckedDisplayLastArticles} type="checkbox" id="custom-message"> <label for="custom-message">Afficher le(s) derniers article(s) dans la pop up de notification</label>
        </div>
        {#if !isCheckedDisplayLastArticles}
            <input type="text" placeholder="titre" name="custom_title">
            <textarea name="custom_message" id="custom_message__input" cols="30" rows="10" placeholder="Message personnalisé"></textarea>
        {:else}
            <input type="number" value="1" name="nb_of_lasts">
        {/if}
        </div>
    <AdminCustomNotification bind:color={customColor}/>
    <input type="submit" value="Enregistrer" style="background-color: {customColor}">
</form>

<style>
form {
    display: flex;
    flex-direction: column;
    gap: 2rem;
    padding-top: 2rem;
}
form .checkbox_form_container {
    display: flex;
    flex-direction: column;
    max-width: 33%;
    gap: 2rem;
}
input {
    padding: .3rem;
}
input[type="submit"] {
    width: fit-content;
    padding: 1rem;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    color: white;
}
input[type="number"] {
    width: fit-content;
}
</style>
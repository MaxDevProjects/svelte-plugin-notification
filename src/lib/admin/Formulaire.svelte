<script>
import AdminCustomNotification from "./AdminCustomNotification.svelte";
$: customColor = "#EA80FC";
</script>

<form>
    <div>
        <input type="checkbox" id="custom-message"> <label for="custom-message">Afficher le(s) derniers article(s) dans la pop up de notification</label>
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

input[type="submit"] {
    width: fit-content;
    padding: 1rem;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    color: white;
}
</style>
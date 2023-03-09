<script>

    let title = "Lorem ipsum dolor sit amet";
    let textPreview = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis cumque, debitis facere facilis harum, labore nulla odit officia reiciendis totam";
    let url = "/blog/1";
    export let color = "#EA80FC"
</script>

<div class="customize-container">
    <div class="notif-container">
        <span class="vertical-bar" style="background-color: {color}"></span>
        <div class="notif-block" style="transform: translateX(0px)">
            <h3 style="font-size: medium">{title}</h3>
            <p style="font-size: small">{textPreview}</p>
            <a style="font-size: smaller; color: {color}" href="{url}">Lire</a>
        </div>
    </div>
    <div class="side-notif-container">
        <div class="customize-color">
            <input type="color" bind:value="{color}" width="32" height="32">
            <input type="text" value="{color}">
        </div>
        <div class="customize-animation">
            <select name="animations" id="animation-select">
                <option value="slide-fade">slide-fade</option>
            </select>
        </div>
    </div>
</div>

<style>
    .customize-color {
        display: flex;
    }
    .customize-container {
        display: flex;
        align-items: center;
        gap: 2rem;
    }
    .side-notif-container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }
    .customize-animation select {
        width: 100%;
    }
    .notif-container {
        width: 256px;
        height: 100%;
        display: flex;
        flex-direction: row-reverse;
        overflow: hidden;
    }
    .vertical-bar {
        display: block;
        width: 12px;
        height: auto;
        z-index: 1000;
    }
    .notif-block {
        padding: 0 .8rem .5rem .5rem;
        color: #333333;
        background-color: #f9f9f9;
    }
    select, input:not([type='color']) {
        padding: .3rem;
    }
    input[type='color'] {
        width: 32px;
        height: 32px;
    }
</style>
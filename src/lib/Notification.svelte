<script>
    import {quintOut} from 'svelte/easing';
    import {onMount} from "svelte";
    import { fly, fade, scale } from 'svelte/transition';

    let title = "Lorem ipsum dolor sit amet";
    let textPreview = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis cumque, debitis facere facilis harum, labore nulla odit officia reiciendis totam";
    let url = "/blog/1";
    let ready = false;
    onMount(() => {
        ready = true;
        setTimeout(() => {
            ready = false;
        }, 25000)
    })

    const closeNotif = () => {
        ready = false;
    }

</script>

<div class="notif-container">
    {#if ready}
    <span transition:scale={{ delay: 250, duration: 300, easing: quintOut }} class="vertical-bar"></span>
    <div transition:fly="{{x: 300, duration: 1200, delay: 500, easing: quintOut}}" class="notif-block" style="transform: translateX(0px)">
        <span class="close" on:click={closeNotif}>X</span>
        <h3 transition:fade={{duration: 800, delay: 1200}} style="font-size: medium">{title}</h3>
        <p transition:fade={{duration: 800, delay: 1350}} style="font-size: small">{textPreview}</p>
        <a transition:fade={{duration: 800, delay: 1500}} style="font-size: smaller" href="{url}">Lire</a>
    </div>
    {/if}
</div>

<style>
    .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 8px;
        cursor: pointer;
    }
.notif-container {
    width: 256px;
    height: 100%;
    display: flex;
    flex-direction: row-reverse;
}

.vertical-bar {
    display: block;
    width: 12px;
    height: auto;
    background-color: #EA80FC;
    z-index: 1000;
}
.notif-block {
    padding: 0 .8rem .5rem .5rem;
    color: #333333;
    background-color: #f9f9f9;
}

a {
    color: #8C9EFF;
}
</style>
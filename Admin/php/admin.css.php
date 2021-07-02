<style>
    .container section {
        background: url('../img/laptop-1478822_1280.jpg') no-repeat;
        object-fit: cover;
        object-position: center;
        position: relative;
        z-index: 1;
    }

    .container section::after {
        content: '';
        position: absolute;
        inset: 0;
        z-index: -1;
        background-color: aliceblue;
        mix-blend-mode: darken;
    }
</style>
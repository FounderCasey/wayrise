<template>
    <div id="navbar">
        <div class="flexbox">
            <a href="/" id="logo"><h3>Wayrise</h3></a>
            <div class="flexbox">
                <a href="/usecases">Use Cases</a>
                <a href="/pricing">Pricing</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "navbar"
};
</script>

<style lang="scss" scoped>
.flexbox {
    justify-content: space-between;
    align-items: center;

    h3 {
        font-size: 1.75rem;
    }

    a {
        font-size: 1.15rem;
        padding: auto 5px;
        margin: auto 20px;
        text-decoration: none;
        color: #181818;

        &:first-of-type {
            padding-left: 0;
            margin-left: 0;
        }

        &:last-of-type {
            padding-right: 0;
            margin-right: 0;
        }
    }
}

#signup {
    color: #ff4949;
    font-weight: 600;

    &:hover {
        cursor: pointer;
    }
}
</style>

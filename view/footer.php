</main>
<script>

function toggleDarkMode() {
    const htmlElement = document.querySelector('html');

    if (!htmlElement.dataset.theme) {
        if (getPreferredScheme() == 'dark') {
            htmlElement.dataset.theme = 'light';
        } else {
            htmlElement.dataset.theme = 'dark';
        }
    } else {
        if (htmlElement.dataset.theme == 'dark') {
            htmlElement.dataset.theme = 'light';
        } else {
            htmlElement.dataset.theme = 'dark';
        }
    }

}

const getPreferredScheme = () => window?.matchMedia?.('(prefers-color-scheme:dark)')?.matches ? 'dark' : 'light';

</script>
</body>
</html>
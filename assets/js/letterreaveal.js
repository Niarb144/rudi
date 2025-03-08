function toggleText() {
    const fullText = document.querySelector('.full-text');
    if (fullText.style.width === '15rem') {
        fullText.style.width = '0';
    } else {
        fullText.style.width = '15rem';
    }
}
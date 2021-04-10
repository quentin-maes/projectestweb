window.onload = function () {
    document.getElementById('cookieclose').onclick = function () {
        this.parentNode.parentNode.parentNode
        .removeChild(this.parentNode.parentNode);
        return false;
    };
};
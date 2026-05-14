
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('a[href]').forEach(link => {
    try {
      if (
        link.hostname &&
        link.hostname !== window.location.hostname &&
        !link.href.startsWith('mailto:') &&
        !link.href.startsWith('#') &&
        !link.href.startsWith('tel:')
      ) {
        link.classList.add('external-link-favicon');

        const faviconUrl = `https://www.google.com/s2/favicons?sz=32&domain=${link.hostname}`;
        link.style.backgroundImage = `url(${faviconUrl})`;
      }
    } catch (e) {
      // fail silently (handles malformed URLs)
    }
  });
});

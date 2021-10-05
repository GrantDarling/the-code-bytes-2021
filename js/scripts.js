// Homepage: Browse Mores
const browseButton = document.querySelectorAll('.articles__browse-more');

const loadMoreArticles = (event) => {
  const articles = document.querySelectorAll(
    '.categories__article:nth-child(n+4)'
  );

  const filteredArticles = Array.prototype.slice
    .call(articles)
    .filter(
      (article) =>
        article.getAttribute('data-article') ==
        event.target.getAttribute('data-article')
    );

  filteredArticles.forEach((article) => {
    article.style.display = 'flex';
  });

  browseButton.forEach((button) => {
    if (
      button.getAttribute('data-article') ==
      event.target.getAttribute('data-article')
    ) {
      button.style.display = 'none';
    }
  });
};

browseButton.forEach((button) => {
  button.addEventListener('click', loadMoreArticles);
});

// Header: Disable scroll
const toggleMenu = document.querySelector('.menu-toggle');

const disableScroll = () => {
  const toggleMenuOpen = toggleMenu.getAttribute('aria-expanded');

  if (toggleMenuOpen == 'true') {
    return (document.body.style.overflow = 'hidden');
  }

  return (document.body.style.overflow = 'visible');
};

toggleMenu.addEventListener('click', disableScroll);

// Header: Check for active link
const currentURL = window.location.href;
let navChildren = document.querySelectorAll('.menu-item');

const displayActiveLink = () => {
  navChildren.forEach((navChild) => {
    let navChildURL = navChild.firstElementChild;
    let parentNode = navChild.parentElement;

    if (navChildURL == currentURL) {
      navChild.classList.add('active');

      // Transverse up from menuitem anchor tag
      while (parentNode.tagName != 'NAV' || parentNode.tagName != 'BODY') {
        if (parentNode.tagName == 'LI') {
          parentNode.classList.add('active');
        }
        parentNode = parentNode.parentElement;
      }
    }
  });
};

displayActiveLink();

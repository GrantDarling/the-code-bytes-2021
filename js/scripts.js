/*
 * Homepage:
 * 'Browse More' Button
 * */

const browseButton = document.querySelectorAll('.articles__browse-more');

const loadMoreArticles = (event) => {
  const articles = document.querySelectorAll(
    '.categories__article:nth-child(n+5)'
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

/*
 * Header:
 * Disable Scroll
 * */

const toggleMenu = document.querySelector('.menu-toggle');

const disableScroll = () => {
  const toggleMenuOpen = toggleMenu.getAttribute('aria-expanded');

  if (toggleMenuOpen == 'true') {
    return (document.body.style.overflow = 'hidden');
  }

  return (document.body.style.overflow = 'visible');
};

toggleMenu.addEventListener('click', disableScroll);

/*
 * Header:
 * Check Active Link
 * */

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

const scrollCompletionBar = () => {
  var isArticlePage = document.getElementsByClassName('single');
  if (isArticlePage.length > 0) {
    const body = document.body,
      html = document.documentElement;

    const height = Math.max(
      body.scrollHeight,
      body.offsetHeight,
      html.clientHeight,
      html.scrollHeight,
      html.offsetHeight
    );

    let windowHeight = window.innerHeight;

    scrollPosition = window.scrollY;
    scrollPositionPercentage = ((scrollPosition + windowHeight) / height) * 100;

    // progress bar
    const progressBar = document.querySelector('#masthead-mimic');
    progressBar.style.width = `${scrollPositionPercentage}%`;
  }
};

document.addEventListener('scroll', scrollCompletionBar);

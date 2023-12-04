<?php
$pageTitle="Home";
include "view-header.php";
?>
<style class="container">
.home-container {
  width: 100%;
  height: auto;
  display: flex;
  overflow: hidden;
  min-height: 100vh;
  align-items: center;
  flex-direction: column;
}
.home-hero {
  flex: 0 0 auto;
  width: 100%;
  display: flex;
  padding: var(--dl-space-space-doubleunit);
  z-index: 1;
  position: relative;
  max-width: 1300px;
  margin-top: var(--dl-space-space-tripleunit);
  align-items: center;
  margin-bottom: var(--dl-space-space-tripleunit);
  flex-direction: row;
  justify-content: space-between;
}
.home-container1 {
  width: auto;
  height: auto;
  display: flex;
  z-index: 2;
  align-items: flex-start;
  flex-direction: column;
}
.home-text {
  font-size: 72px;
  margin-bottom: var(--dl-space-space-doubleunit);
}
.home-text1 {
  color: #000000;
  max-width: 500px;
  margin-bottom: var(--dl-space-space-doubleunit);
}
.home-image {
  width: 516px;
  height: 426px;
  z-index: 100;
  transform: rotate(-10deg);
  margin-top: -6rem;
  object-fit: cover;
  margin-right: var(--dl-space-space-doubleunit);
}
.home-image1 {
  height: 252px;
  align-self: stretch;
  object-fit: cover;
}
.home-image2 {
  height: 285px;
  align-self: stretch;
  object-fit: cover;
}
@media(max-width: 991px) {
  .home-hero {
    flex-direction: column;
  }
  .home-container1 {
    align-items: center;
    margin-bottom: var(--dl-space-space-doubleunit);
  }
  .home-text {
    text-align: center;
  }
  .home-image {
    width: 80%;
    margin-top: var(--dl-space-space-tripleunit);
  }
}
@media(max-width: 767px) {
  .home-text {
    font-size: 50px;
  }
}

  </style>
  
<div>

  <div class="home-container">
    <div class="home-hero">
      <div class="home-container1">
        <h1 class="home-text slide-in-text">Log Your Favorite Movies</h1>
        <span class="home-text1">
          This website will allow you to track your movies. Within this website
          you can list the director, favorite actor, movie title, genre, and
          production company.
        </span>
      </div>
      <img
        alt="image"
        src="https://upload.wikimedia.org/wikipedia/en/b/b4/At-the-movies.jpg"
        class="home-image"
      />
    </div>
    <img
      src="https://www.universalpictures.com/assets/img/universal-share.jpg"
      alt="image"
      class="home-image1"
    />
    <img
      src="https://images.thedirect.com/media/article_full/disney-movies-titles.jpg"
      alt="image"
      class="home-image2"
    />
  </div>
</div>


<?php
include "view-footer.php";
?>

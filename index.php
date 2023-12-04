<?php
$pageTitle="Home";
include "view-header.php";
?>
<div>
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
  width: 476px;
  height: 347px;
  z-index: 100;
  transform: rotate(-10deg);
  margin-top: -6rem;
  object-fit: cover;
  margin-right: var(--dl-space-space-doubleunit);
}
.home-turquoise-cirble {
  top: auto;
  left: auto;
  right: 400px;
  bottom: 0px;
  position: absolute;
  object-fit: cover;
}
.home-orange-circle {
  top: 250px;
  left: auto;
  right: 530px;
  bottom: auto;
  position: absolute;
  object-fit: cover;
}
.home-purple-circle {
  top: -250px;
  left: auto;
  right: -200px;
  width: 700px;
  bottom: auto;
  height: 700px;
  position: absolute;
  object-fit: cover;
}
.home-image1 {
  left: -55px;
  width: 552px;
  bottom: -2px;
  height: 252px;
  position: absolute;
  object-fit: cover;
}
.home-image2 {
  top: 471px;
  left: -1px;
  width: 471px;
  height: 285px;
  position: absolute;
  align-self: flex-start;
  object-fit: cover;
}
.home-image3 {
  left: 466px;
  width: 408px;
  bottom: -3px;
  height: 532px;
  position: absolute;
  align-self: flex-end;
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
  .home-turquoise-cirble {
    top: auto;
    right: 30%;
    bottom: -30px;
  }
  .home-orange-circle {
    top: auto;
    left: 10%;
    right: auto;
    bottom: 50px;
  }
}
@media(max-width: 767px) {
  .home-text {
    font-size: 50px;
  }
  .home-purple-circle {
    top: -345px;
    left: auto;
    right: -379px;
    bottom: auto;
  }
}

  <div>
  <link href="./home.css" rel="stylesheet" />
  <div class="home-container">
    <div class="home-hero">
      <div class="home-container1">
        <h1 class="home-text">Log Your Favorite Movies</h1>
        <span class="home-text1">
          This website will allow you to track your movies. Within this website
          you and list the director, favorite actor, movie title, genre, and
          production company.
        </span>
      </div>
      <img
        alt="image"
        src="https://upload.wikimedia.org/wikipedia/en/b/b4/At-the-movies.jpg"
        class="home-image"
      />
      <img
        alt="image"
        src="/turquoise%20circle-1300w.png"
        class="home-turquoise-cirble"
      />
      <img
        alt="image"
        src="/orange%20circle-1300w.png"
        class="home-orange-circle"
      />
      <img
        alt="image"
        src="/purple%20circle1-700h.png"
        class="home-purple-circle"
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
    <img
      src="https://images.squarespace-cdn.com/content/v1/5efce5920d28887981c5bd9b/1607026464156-CR7GRV3HQANOZQXT7C6C/Warner+Bros.+2021+releases.jpg"
      alt="image"
      class="home-image3"
    />
  </div>
</div>
</div>


<?php
include "view-footer.php";
?>

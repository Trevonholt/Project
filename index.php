<?php
$pageTitle="Home";
include "view-header.php";
?>
.container {
  width: 100%;
  height: auto;
  display: flex;
  overflow: hidden;
  min-height: 100vh;
  align-items: center;
  flex-direction: column;
}
.hero {
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
.container1 {
  width: auto;
  height: auto;
  display: flex;
  z-index: 2;
  align-items: flex-start;
  flex-direction: column;
}
.text {
  font-size: 72px;
  margin-bottom: var(--dl-space-space-doubleunit);
}
.text1 {
  color: #000000;
  max-width: 500px;
  margin-bottom: var(--dl-space-space-doubleunit);
}
.image {
  width: 476px;
  height: 347px;
  z-index: 100;
  transform: rotate(-10deg);
  margin-top: -6rem;
  object-fit: cover;
  margin-right: var(--dl-space-space-doubleunit);
}
.turquoise-cirble {
  top: auto;
  left: auto;
  right: 400px;
  bottom: 0px;
  position: absolute;
  object-fit: cover;
}
.orange-circle {
  top: 250px;
  left: auto;
  right: 530px;
  bottom: auto;
  position: absolute;
  object-fit: cover;
}
.purple-circle {
  top: -250px;
  left: auto;
  right: -200px;
  width: 700px;
  bottom: auto;
  height: 700px;
  position: absolute;
  object-fit: cover;
}
.image1 {
  left: -55px;
  width: 552px;
  bottom: -2px;
  height: 252px;
  position: absolute;
  object-fit: cover;
}
.image2 {
  top: 471px;
  left: -1px;
  width: 471px;
  height: 285px;
  position: absolute;
  align-self: flex-start;
  object-fit: cover;
}
.image3 {
  left: 466px;
  width: 408px;
  bottom: -3px;
  height: 532px;
  position: absolute;
  align-self: flex-end;
  object-fit: cover;
}
@media(max-width: 991px) {
  .hero {
    flex-direction: column;
  }
  .container1 {
    align-items: center;
    margin-bottom: var(--dl-space-space-doubleunit);
  }
  .text {
    text-align: center;
  }
  .image {
    width: 80%;
    margin-top: var(--dl-space-space-tripleunit);
  }
  .turquoise-cirble {
    top: auto;
    right: 30%;
    bottom: -30px;
  }
  .orange-circle {
    top: auto;
    left: 10%;
    right: auto;
    bottom: 50px;
  }
}
@media(max-width: 767px) {
  .text {
    font-size: 50px;
  }
  .purple-circle {
    top: -345px;
    left: auto;
    right: -379px;
    bottom: auto;
  }
}

import React from 'react'

import styles from './home.module.css'

const Home = (props) => {
  return (
    <div className={styles['container']}>
      <div className={styles['hero']}>
        <div className={styles['container1']}>
          <h1 className={styles['text']}>Log Your Favorite Movies</h1>
          <span className={styles['text1']}>
            This website will allow you to track your movies. Within this
            website you and list the director, favorite actor, movie title,
            genre, and production company.
          </span>
        </div>
        <img
          alt="image"
          src="https://upload.wikimedia.org/wikipedia/en/b/b4/At-the-movies.jpg"
          className={styles['image']}
        />
        <img
          alt="image"
          src="/turquoise%20circle-1300w.png"
          className={styles['turquoise-cirble']}
        />
        <img
          alt="image"
          src="/orange%20circle-1300w.png"
          className={styles['orange-circle']}
        />
        <img
          alt="image"
          src="/purple%20circle1-700h.png"
          className={styles['purple-circle']}
        />
      </div>
      <img
        src="https://www.universalpictures.com/assets/img/universal-share.jpg"
        alt="image"
        className={styles['image1']}
      />
      <img
        src="https://images.thedirect.com/media/article_full/disney-movies-titles.jpg"
        alt="image"
        className={styles['image2']}
      />
      <img
        src="https://images.squarespace-cdn.com/content/v1/5efce5920d28887981c5bd9b/1607026464156-CR7GRV3HQANOZQXT7C6C/Warner+Bros.+2021+releases.jpg"
        alt="image"
        className={styles['image3']}
      />
    </div>
  )
}

export default Home



<?php
include "view-footer.php";
?>

const buttonIntroduce = document.querySelector('.button-introduce');
const buttonVision = document.querySelector('.button-vision');
const buttonHistory = document.querySelector('.button-history');
const paragraphOne = document.querySelector('.paragraph-one');


buttonIntroduce.addEventListener('click', function() {
    buttonVision.classList.remove('active');
    buttonHistory.classList.remove('active');
    buttonIntroduce.classList.add('active');
    paragraphOne.innerHTML = "At our talent contest, we are committed to unleashing the power of talent and providing a platform for dreamers to showcase their unique abilities. We believe that everyone deserves a chance to be heard, seen, and celebrated for their extraordinary gifts.";
    paragraphTwo.innerHTML = "With a vibrant community of artists, mentors, and enthusiasts, we foster an environment that sparks creativity, fosters growth, and inspires others to pursue their passions. Join us on this incredible journey of talent discovery, where dreams become reality and stars are born.";
});

buttonVision.addEventListener('click', function() {
    buttonIntroduce.classList.remove('active');
    buttonHistory.classList.remove('active');
    buttonVision.classList.add('active');
    paragraphOne.innerHTML = "Our vision at 5 Star Talent Showdown is to provide a stage for the world's finest talents to shine and inspire. We believe that everyone deserves a fair and open platform to showcase their talents in various artistic fields. By creating a supportive and inclusive environment, we aim to foster a community where individuals can unleash their creative potential and captivate audiences worldwide.";
    paragraphTwo.innerHTML = "Our mission is twofold. Firstly, we strive to provide aspiring artists with the opportunity to showcase their skills and passion on a global stage. Through our talent contest, we aim to discover and promote exceptional talents across various categories such as singing, dancing, comedy, magic, and instrumental performances. Secondly, we aim to inspire and entertain audiences by presenting a diverse range of exceptional performances that leave a lasting impact. By encouraging artistic expression and nurturing talent, we aim to contribute to the growth and development of the global arts community.";
});

buttonHistory.addEventListener('click', function() {
    buttonIntroduce.classList.remove('active');
    buttonVision.classList.remove('active');
    buttonHistory.classList.add('active');
    paragraphOne.innerHTML = "Since its inception, 5 Star Talent Showdown has been dedicated to discovering and showcasing the world's most extraordinary talents. With a rich history spanning over a decade, our talent contest has become a prestigious platform for aspiring artists to showcase their skills and embark on a journey of recognition and success. We have witnessed countless inspiring performances and witnessed the transformative power of talent. Our history is rooted in a passion for nurturing creativity, promoting inclusivity, and providing a stage where dreams come to life.";
    paragraphTwo.innerHTML = "At 5 Star Talent Showdown, our goal is to empower individuals and foster a vibrant artistic community. We aim to create a platform that not only celebrates exceptional talents but also encourages personal growth and artistic development. Our talented contestants have gone on to achieve great milestones, from securing record deals and starring in major productions to captivating audiences on global stages. Through our talent contest, we aspire to bring people together, ignite their passion, and provide opportunities for aspiring artists to shine. Whether you're a singer, dancer, comedian, or magician, we invite you to be part of our history and join us on this incredible journey of talent discovery and celebration.";
});
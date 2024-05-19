<!DOCTYPE html>
<html lang="en">
<head>
    <title>Radiohead | About</title>
    <meta name="description" content="Learn more about the iconic band Radiohead, their history, music, and impact on the music industry.">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>
<body>

    @include('partials.hero')

    <section class="content-section container">
        <h2 class="section-header">About</h2>
        <p>
            Radiohead is an English rock band formed in Abingdon, Oxfordshire, in 1985. The band consists of Thom Yorke (vocals, guitar, piano), Jonny Greenwood (lead guitar, keyboards), Colin Greenwood (bass), Ed O'Brien (guitar, backing vocals), and Philip Selway (drums, percussion). Known for their experimental approach to music, Radiohead has influenced countless artists and continues to push the boundaries of rock and electronic music.
        </p>
        <img class="about-band-image" src="{{ asset('Images/about.jpg') }}" width="600" alt="Radiohead band members">
        <p>
            The band's debut single, "Creep," released in 1992, became a worldwide hit. Their subsequent albums, including "The Bends" (1995) and "OK Computer" (1997), solidified their reputation as one of the leading rock bands of the 90s. "OK Computer" received critical acclaim for its complex, atmospheric sound and themes of modern alienation.
        </p>
        <p>
            In the 2000s, Radiohead continued to evolve with albums like "Kid A" (2000) and "Amnesiac" (2001), which incorporated electronic music, jazz, and classical influences. These albums marked a departure from their earlier guitar-driven sound and showcased the band's willingness to experiment and challenge the conventions of rock music.
        </p>
        <p>
            Over the years, Radiohead has received numerous awards, including multiple Grammy Awards and a place in Rolling Stone's list of "The 500 Greatest Albums of All Time" for several of their albums. Their influence extends beyond music to their innovative use of the internet for album releases and their environmental activism.
        </p>
        <p>
            Radiohead's legacy is defined by their relentless innovation, powerful live performances, and the profound emotional connection they forge with their audience. They remain one of the most critically acclaimed and influential bands in contemporary music.
        </p>
    </section>

    @include('partials.footer')
</body>
</html>
<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}

.header, .footer {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

.section-header {
    font-size: 2.5em;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

.content-section {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

.about-band-image {
    display: block;
    max-width: 100%;
    height: auto;
    margin: 20px auto;
    border-radius: 10px;
}

p {
    margin: 10px 0;
    font-size: 1.1em;
}

@media (max-width: 768px) {
    .container {
        width: 95%;
    }

    .section-header {
        font-size: 2em;
    }

    p {
        font-size: 1em;
    }
}

</style>

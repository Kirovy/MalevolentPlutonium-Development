<?php
    $newspaper = array(
        array(
            'title' => 'Malevolent Plutonium Project 1',
            'description' => 'This is a long description about the new and upcoming project called Malevolent which is for Plutonium Black Ops 2 zombies.'
        ),
        array(
            'title' => 'Malevolent Plutonium Project 2',
            'description' => 'This is a long description about the new and upcoming project called Malevolent which is for Plutonium Black Ops 2 zombies.'
        ),
        array(
            'title' => 'Malevolent Plutonium Project 3',
            'description' => 'This is a long description about the new and upcoming project called Malevolent which is for Plutonium Black Ops 2 zombies.'
        ),
        array(
            'title' => 'Malevolent Plutonium Project 4',
            'description' => 'This is a long description about the new and upcoming project called Malevolent which is for Plutonium Black Ops 2 zombies.'
        ),
    );
?>

<div class="newspaper">
    <div>
        <article>
            <h2 class="title news-title" data-index="0">{{ $newspaper[0]['title'] }}</h2>
            <p class="description news-description" data-index="0">{{ $newspaper[0]['description'] }}</p>
        </article>
        <progress id="newspaper-progress" class="progress" value="0" max="1000"></progress>
    </div>

    <div>
        <article>
            <h2 class="title news-title fade" data-index="1">{{ $newspaper[1]['title'] }}</h2>
            <p class="description news-description fade" data-index="1">{{ $newspaper[1]['description'] }}</p>
        </article>
    </div>

    <div>
        <article>
            <h2 class="title news-title fade" data-index="2">{{ $newspaper[2]['title'] }}</h2>
            <p class="description news-description fade" data-index="2">{{ $newspaper[2]['description'] }}</p>
        </article>
    </div>
</div>

<script>
    const newspapers = {!! json_encode($newspaper) !!};

    const progress = document.getElementById('newspaper-progress');

    const titles = document.querySelectorAll('.news-title');
    const descriptions = document.querySelectorAll('.news-description');

    const max = progress.max;

    let value = 0;
    let currentIndex = 0;

    function updateContent() {
        titles.forEach((el, i) => {
            if (i === 0) {
                el.classList.add('slide-out');
            } else {
                el.classList.add('fade-out');
            }
        });

        descriptions.forEach((el, i) => {
            if (i === 0) {
                el.classList.add('slide-out');
            } else {
                el.classList.add('fade-out');
            }
        });

        setTimeout(() => {
            currentIndex = (currentIndex + 1) % newspapers.length;

            titles.forEach((el, i) => {
                const idx = (currentIndex + i) % newspapers.length;
                el.textContent = newspapers[idx].title;

                if (i === 0) {
                    el.classList.remove('slide-out');
                    el.classList.add('slide-in');
                } else {
                    el.classList.remove('fade-out');
                    el.classList.add('fade-in');
                }
            });

            descriptions.forEach((el, i) => {
                const idx = (currentIndex + i) % newspapers.length;
                el.textContent = newspapers[idx].description;

                if (i === 0) {
                    el.classList.remove('slide-out');
                    el.classList.add('slide-in');
                } else {
                    el.classList.remove('fade-out');
                    el.classList.add('fade-in');
                }
            });

            setTimeout(() => {
                titles.forEach((el, i) => {
                    el.classList.remove('slide-in');
                    el.classList.remove('fade-in');
                });

                descriptions.forEach((el, i) => {
                    el.classList.remove('slide-in');
                    el.classList.remove('fade-in');
                });
            }, 600);

        }, 600);
    }

    function startProgress() {
        value = 0;
        progress.value = value;

        const interval = setInterval(() => {
            value++;
            progress.value = value;

            if (value >= max) {
                clearInterval(interval);
                updateContent();
                startProgress();
            }
        }, 10);
    }

    startProgress();
</script>



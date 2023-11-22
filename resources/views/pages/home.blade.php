@extends('layouts.home')


@section('title', 'Home')

@section('content')
    <section class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h2 class="display-4 fw-bold lh-1 mb-3">
                    Today Intel
                </h2>
                <p class="col-lg-10 fs-4 pl-0">
                   Find what is trending now on the internet. From news to social media to products all in one place.
                </p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <!-- Add here an way for the user to signup -->
                <form class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                    <hr class="my-4">
                    <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                </form>
            </div>
        </div>
    </section>



    <div class="container">
        <div class="row">
            <aside class="col-lg-2">
                Left
            </aside>
            <main class="bg-white col-lg-8">
                <div id="homepage">
                    <ul class="cloud" role="navigation" aria-label="Trending now">
                        <li><a href="#" data-weight="4">HTTP</a></li>
                        <li><a href="#" data-weight="1">Ember</a></li>
                        <li><a href="#" data-weight="5">Sass</a></li>
                        <li><a href="#" data-weight="8">HTML</a></li>
                        <li><a href="#" data-weight="6">FlexBox</a></li>
                        <li><a href="#" data-weight="4">API</a></li>
                        <li><a href="#" data-weight="5">VueJS</a></li>
                        <li><a href="#" data-weight="6">Grid</a></li>
                        <li><a href="#" data-weight="2">Rest</a></li>
                        <li><a href="#" data-weight="9">JavaScript</a></li>
                        <li><a href="#" data-weight="3">Animation</a></li>
                        <li><a href="#" data-weight="7">React</a></li>
                        <li><a href="#" data-weight="8">CSS</a></li>
                        <li><a href="#" data-weight="1">Cache</a></li>
                        <li><a href="#" data-weight="3">Less</a></li>
                    </ul>
                </div>
            </main>
            <aside class="col-lg-2">
                Right
            </aside>
        </div>
    </div>

@endsection
<style>

    ul.cloud {
        list-style: none;
        padding-left: 0;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        line-height: 2.75rem;
    }

    ul.cloud a {
        /*
        Not supported by any browser at the moment :(
        --size: attr(data-weight number);
        */
        --size: 4;
        --color: #a33;
        color: var(--color);
        font-size: calc(var(--size) * 0.25rem + 0.5rem);
        display: block;
        padding: 0.125rem 0.25rem;
        position: relative;
        text-decoration: none;
        /*
        For different tones of a single color
        opacity: calc((15 - (9 - var(--size))) / 15);
        */
    }

    ul.cloud a[data-weight="1"] { --size: 1; }
    ul.cloud a[data-weight="2"] { --size: 2; }
    ul.cloud a[data-weight="3"] { --size: 3; }
    ul.cloud a[data-weight="4"] { --size: 4; }
    ul.cloud a[data-weight="5"] { --size: 6; }
    ul.cloud a[data-weight="6"] { --size: 8; }
    ul.cloud a[data-weight="7"] { --size: 10; }
    ul.cloud a[data-weight="8"] { --size: 13; }
    ul.cloud a[data-weight="9"] { --size: 16; }

    ul[data-show-value] a::after {
        content: " (" attr(data-weight) ")";
        font-size: 1rem;
    }

    ul.cloud li:nth-child(2n+1) a { --color: #181; }
    ul.cloud li:nth-child(3n+1) a { --color: #33a; }
    ul.cloud li:nth-child(4n+1) a { --color: #c38; }

    ul.cloud a:focus {
        outline: 1px dashed;
    }

    ul.cloud a::before {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        width: 0;
        height: 100%;
        background: var(--color);
        transform: translate(-50%, 0);
        opacity: 0.15;
        transition: width 0.25s;
    }

    ul.cloud a:focus::before,
    ul.cloud a:hover::before {
        width: 100%;
    }

    @media (prefers-reduced-motion) {
        ul.cloud * {
            transition: none !important;
        }
    }
</style>
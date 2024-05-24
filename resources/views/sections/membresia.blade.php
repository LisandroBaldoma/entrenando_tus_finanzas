@extends('layout.base')

@section('main')

<!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6 xl:px-32">
        <!-- Section: Design Block -->
        <section class="mb-32">
        <div
            class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex flex-wrap items-center">
            <div class="block w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
                <img src="https://tecdn.b-cdn.net/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
                class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
            </div>
            <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12">
                <div class="px-6 py-12 md:px-12">
                <h2 class="mb-6 pb-2 text-4xl font-bold">One-time payment</h2>
                <p class="mb-6 pb-2 text-neutral-500 dark:text-neutral-300">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                    soluta corporis voluptate ab error quam dolores doloremque,
                    quae consectetur.
                </p>
                <div class="mb-6 flex flex-wrap">
                    <div class="mb-6 w-full md:w-4/12 lg:w-6/12 xl:w-4/12">
                    <p class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-success">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Support 24/7
                    </p>
                    </div>
                    <div class="mb-6 w-full md:w-4/12 lg:w-6/12 xl:w-4/12">
                    <p class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-success">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Analytics
                    </p>
                    </div>
                    <div class="mb-6 w-full md:w-4/12 lg:w-6/12 xl:w-4/12">
                    <p class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-success">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Components
                    </p>
                    </div>
                    <div class="mb-6 w-full md:w-4/12 lg:w-6/12 xl:w-4/12">
                    <p class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-success">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Updates
                    </p>
                    </div>
                    <div class="mb-6 w-full md:w-4/12 lg:w-6/12 xl:w-4/12">
                    <p class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-success">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Reports
                    </p>
                    </div>
                    <div class="mb-6 w-full md:w-4/12 lg:w-6/12 xl:w-4/12">
                    <p class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-success">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Mobile
                    </p>
                    </div>
                </div>
                <button type="button"
                    class="inline-block rounded bg-primary px-12 pt-3.5 pb-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init data-te-ripple-color="light">
                    Buy now
                </button>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!-- Section: Design Block -->
    </div>
<!-- Container for demo purpose -->

<!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="mb-32">
        <style>
            .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
                hsl(218, 41%, 35%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%),
                radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
            }
        </style>

        <div class="background-radial-gradient text-center text-white lg:h-[400px] h-[300px] lg:pt-[80px] pt-[55px]">
            <h2 class="mb-12 text-center text-3xl font-bold">Pricing</h2>
        </div>

        <div class="grid px-6 md:px-12 lg:grid-cols-3 xl:px-32" style="margin-top: -200px">
            <div class="p-0 py-12">
            <div
                class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 lg:rounded-tr-none lg:rounded-br-none">
                <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                <p class="mb-4 text-sm uppercase">
                    <strong>Basic</strong>
                </p>
                <h3 class="mb-6 text-3xl">
                    <strong>$ 129</strong>
                    <small class="text-base text-neutral-500 dark:text-neutral-300">/year</small>
                </h3>

                <button type="button"
                    class="inline-block w-full rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                    data-te-ripple-init data-te-ripple-color="light">
                    Buy
                </button>
                </div>
                <div class="p-6">
                <ol class="list-inside">
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Unlimited
                    updates
                    </li>
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Git
                    repository
                    </li>
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>npm
                    installation
                    </li>
                </ol>
                </div>
            </div>
            </div>

            <div>
            <div
                class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
                style="z-index: 1">
                <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                <p class="mb-4 text-sm uppercase">
                    <strong>Enterprise</strong>
                </p>
                <h3 class="mb-6 text-3xl">
                    <strong>$ 499</strong>
                    <small class="text-base text-neutral-500 dark:text-neutral-300">/year</small>
                </h3>

                <button type="button"
                    class="inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init data-te-ripple-color="light">
                    Buy
                </button>
                </div>
                <div class="p-6">
                <ol class="list-inside">
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Unlimited
                    updates
                    </li>
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Git
                    repository
                    </li>
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>npm
                    installation
                    </li>
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Code examples
                    </li>
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Premium
                    snippets
                    </li>
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Premium
                    support
                    </li>
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Drag&amp;Drop
                    builder
                    </li>
                </ol>
                </div>
            </div>
            </div>

            <div class="py-12">
            <div
                class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 lg:rounded-tl-none lg:rounded-bl-none">
                <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                <p class="mb-4 text-sm uppercase">
                    <strong>Advanced</strong>
                </p>
                <h3 class="mb-6 text-3xl">
                    <strong>$ 299</strong>
                    <small class="text-base text-neutral-500 dark:text-neutral-300">/year</small>
                </h3>

                <button type="button"
                    class="inline-block w-full rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                    data-te-ripple-init data-te-ripple-color="light">
                    Buy
                </button>
                </div>
                <div class="p-6">
                <ol class="list-inside">
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Unlimited
                    updates
                    </li>
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Git
                    repository
                    </li>
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>npm
                    installation
                    </li>
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Code examples
                    </li>
                    <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Premium
                    snippets
                    </li>
                </ol>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!-- Section: Design Block -->
    </div>
<!-- Container for demo purpose -->


<!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="mb-32">
        <h2 class="mb-12 text-center text-3xl font-bold">Pricing</h2>

        <!-- Pills navs -->
        <ul class="mb-12 flex list-none flex-col flex-wrap pl-0 md:flex-row" role="tablist" data-te-nav-ref>
            <li role="presentation" class="flex-grow basis-0 text-center">
            <a href="#pills-home02"
                class="my-2 block rounded bg-neutral-100 px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-primary-100 data-[te-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700 md:mr-4"
                id="pills-home-tab02" data-te-toggle="pill" data-te-target="#pills-home02" data-te-nav-active role="tab"
                aria-controls="pills-home02" aria-selected="true">Indyviduals</a>
            </li>
            <li role="profile" class="flex-grow basis-0 text-center">
            <a href="#pills-profile02"
                class="my-2 block rounded bg-neutral-100 px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-primary-100 data-[te-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700 md:mr-4"
                id="pills-profile-tab02" data-te-toggle="pill" data-te-target="#pills-profile02" role="tab"
                aria-controls="pills-profile02" aria-selected="false">Teams</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="mb-6">
            <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="pills-home02" role="tabpanel" aria-labelledby="pills-home-tab02" data-te-tab-active>
            <div class="grid gap-6 lg:grid-cols-3 lg:gap-x-12">
                <div class="mb-6 lg:mb-0">
                <div
                    class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                    <p class="mb-4 text-sm uppercase">
                        <strong>Basic</strong>
                    </p>
                    <h3 class="mb-6 text-3xl">
                        <strong>$ 129</strong>
                        <small class="text-base text-neutral-500 dark:text-neutral-300">/year</small>
                    </h3>

                    <button type="button"
                        class="inline-block w-full rounded bg-[hsl(0,0%,95%)] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-[hsl(0,0%,93%)] focus:bg-[hsl(0,0%,95%)] focus:outline-none focus:ring-0 active:bg-[hsl(0,0%,90%)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        Buy
                    </button>
                    </div>
                    <div class="p-6">
                    <ol class="list-inside">
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Unlimited
                        updates
                        </li>
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Git
                        repository
                        </li>
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>npm
                        installation
                        </li>
                    </ol>
                    </div>
                </div>
                </div>

                <div class="mb-6 lg:mb-0">
                <div
                    class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                    <p class="mb-4 text-sm uppercase">
                        <strong>Advanced</strong>
                    </p>
                    <h3 class="mb-6 text-3xl">
                        <strong>$ 299</strong>
                        <small class="text-base text-neutral-500 dark:text-neutral-300">/year</small>
                    </h3>
                    <button type="button"
                        class="inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        Buy
                    </button>
                    </div>
                    <div class="p-6">
                    <ol class="list-inside">
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Unlimited
                        updates
                        </li>
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Git
                        repository
                        </li>
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>npm
                        installation
                        </li>
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Code
                        examples
                        </li>
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Premium
                        snippets
                        </li>
                    </ol>
                    </div>
                </div>
                </div>

                <div class="mb-6 lg:mb-0">
                <div
                    class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                    <p class="mb-4 text-sm uppercase">
                        <strong>Enterprise</strong>
                    </p>
                    <h3 class="mb-6 text-3xl">
                        <strong>$ 499</strong>
                        <small class="text-base text-neutral-500 dark:text-neutral-300">/year</small>
                    </h3>
                    <button type="button"
                        class="inline-block w-full rounded bg-[hsl(0,0%,95%)] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-[hsl(0,0%,93%)] focus:bg-[hsl(0,0%,95%)] focus:outline-none focus:ring-0 active:bg-[hsl(0,0%,90%)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        Buy
                    </button>
                    </div>
                    <div class="p-6">
                    <ol class="list-inside">
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Unlimited
                        updates
                        </li>
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Git
                        repository
                        </li>
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>npm
                        installation
                        </li>
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Code
                        examples
                        </li>
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Premium
                        snippets
                        </li>
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Premium
                        support
                        </li>
                        <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>Drag&amp;Drop builder
                        </li>
                    </ol>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="pills-profile02" role="tabpanel" aria-labelledby="pills-profile-tab02">
            <div class="grid gap-6 lg:grid-cols-3 lg:gap-x-12">
                <div class="mb-6 lg:mb-0">
                <div
                    class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="p-6 pt-6 pb-10 text-center">
                    <p class="mb-4 text-sm uppercase">
                        <strong>3 users</strong>
                    </p>
                    <h3 class="mb-6 text-3xl">
                        <strong>$ 799</strong>
                        <small class="text-base text-neutral-500 dark:text-neutral-300">/year</small>
                    </h3>

                    <button type="button"
                        class="inline-block w-full rounded bg-[hsl(0,0%,95%)] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-[hsl(0,0%,93%)] focus:bg-[hsl(0,0%,95%)] focus:outline-none focus:ring-0 active:bg-[hsl(0,0%,90%)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        Buy
                    </button>
                    </div>
                </div>
                </div>

                <div class="mb-6 lg:mb-0">
                <div
                    class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="p-6 pt-6 pb-10 text-center">
                    <p class="mb-4 text-sm uppercase">
                        <strong>4 users</strong>
                    </p>
                    <h3 class="mb-6 text-3xl">
                        <strong>$ 999</strong>
                        <small class="text-base text-neutral-500 dark:text-neutral-300">/year</small>
                    </h3>

                    <button type="button"
                        class="inline-block w-full rounded bg-[hsl(0,0%,95%)] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-[hsl(0,0%,93%)] focus:bg-[hsl(0,0%,95%)] focus:outline-none focus:ring-0 active:bg-[hsl(0,0%,90%)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        Buy
                    </button>
                    </div>
                </div>
                </div>

                <div class="mb-6 lg:mb-0">
                <div
                    class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="p-6 pt-6 pb-10 text-center">
                    <p class="mb-4 text-sm uppercase">
                        <strong>More users</strong>
                    </p>
                    <h3 class="mb-6 text-3xl">
                        <strong>Custom offer</strong>
                    </h3>

                    <button type="button"
                        class="inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        Contact us
                    </button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Pills content -->
        </section>
        <!-- Section: Design Block -->
    </div>
<!-- Container for demo purpose -->


@endsection

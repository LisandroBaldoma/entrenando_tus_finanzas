@extends('layout.base')

@section('main')

<!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6 xl:px-24">
        <!-- Section: Design Block -->
        <section class="mb-32">
        <h2 class="mb-6 pl-6 text-3xl font-bold">Frequently asked questions</h2>

        <div id="accordionFlushExample">
            <div class="rounded-none border border-t-0 border-l-0 border-r-0 border-neutral-200">
            <h2 class="mb-0" id="flush-headingOne">
                <button
                class="group relative flex w-full items-center rounded-none border-0 py-4 px-5 text-left text-base font-bold transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:text-primary-400"
                type="button" data-te-collapse-init data-te-target="#flush-collapseOne" aria-expanded="false"
                aria-controls="flush-collapseOne">
                Anim pariatur cliche reprehenderit?
                <span
                    class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-[#8FAEE0] dark:group-[[data-te-collapse-collapsed]]:fill-[#eee]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                    </svg>
                </span>
                </button>
            </h2>
            <div id="flush-collapseOne" class="!visible border-0" data-te-collapse-item data-te-collapse-show
                aria-labelledby="flush-headingOne" data-te-parent="#accordionFlushExample">
                <div class="py-4 px-5 text-neutral-500 dark:text-neutral-300">
                Anim pariatur cliche reprehenderit, enim eiusmod high life
                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa
                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                wes anderson cred nesciunt sapiente ea proident. Ad vegan
                excepteur butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably
                haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
            </div>
            <div class="rounded-none border border-l-0 border-r-0 border-t-0 border-neutral-200">
            <h2 class="mb-0" id="flush-headingTwo">
                <button
                class="group relative flex w-full items-center rounded-none border-0 py-4 px-5 text-left text-base font-bold transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:text-primary-400"
                type="button" data-te-collapse-init data-te-collapse-collapsed data-te-target="#flush-collapseTwo"
                aria-expanded="false" aria-controls="flush-collapseTwo">
                Non cupidatat skateboard dolor brunch?
                <span
                    class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-[#8FAEE0] dark:group-[[data-te-collapse-collapsed]]:fill-[#eee]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                    </svg>
                </span>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="!visible hidden border-0" data-te-collapse-item
                aria-labelledby="flush-headingTwo" data-te-parent="#accordionFlushExample">
                <div class="py-4 px-5 text-neutral-500 dark:text-neutral-300">
                Anim pariatur cliche reprehenderit, enim eiusmod high life
                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa
                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                wes anderson cred nesciunt sapiente ea proident. Ad vegan
                excepteur butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably
                haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
            </div>
            <div class="rounded-none border border-l-0 border-r-0 border-b-0 border-t-0 border-neutral-200">
            <h2 class="mb-0" id="flush-headingThree">
                <button
                class="group relative flex w-full items-center rounded-none border-0 py-4 px-5 text-left text-base font-bold transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:text-primary-400"
                type="button" data-te-collapse-init data-te-collapse-collapsed data-te-target="#flush-collapseThree"
                aria-expanded="false" aria-controls="flush-collapseThree">
                Praesentium voluptatibus temporibus consequatur non aspernatur?
                <span
                    class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-[#8FAEE0] dark:group-[[data-te-collapse-collapsed]]:fill-[#eee]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                    </svg>
                </span>
                </button>
            </h2>
            <div id="flush-collapseThree" class="!visible hidden rounded-b-lg" data-te-collapse-item
                aria-labelledby="flush-headingThree" data-te-parent="#accordionFlushExample">
                <div class="py-4 px-5 text-neutral-500 dark:text-neutral-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                optio vitae inventore autem fugiat rerum sed laborum. Natus
                recusandae laboriosam quos pariatur corrupti id dignissimos
                deserunt, praesentium voluptatibus temporibus consequatur non
                aspernatur laborum rerum nemo dolorem libero inventore provident
                exercitationem sunt totam aperiam. Facere sunt quos commodi
                obcaecati temporibus alias amet! Quam quisquam laboriosam quae
                repellendus non cum adipisci odio?
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
        <div class="grid gap-4 md:grid-cols-2">
            <div class="mb-6 md:mb-0">
            <h2 class="mb-6 text-3xl font-bold">Frequently asked questions</h2>

            <p class="text-neutral-500 dark:text-neutral-300">
                Didn't find your answer in the FAQ?
                <a href="#!"
                class="text-primary transition duration-300 hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600">Contact
                our sales team</a>.
            </p>
            </div>

            <div class="mb-6 md:mb-0">
            <p class="mb-4 font-bold">Anim pariatur cliche reprehenderit?</p>
            <p class="mb-12 text-neutral-500 dark:text-neutral-300">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt
                autem numquam dolore molestias aperiam culpa alias veritatis
                architecto eos, molestiae vitae ex eligendi libero eveniet
                dolorem, doloremque rem aliquid perferendis.
            </p>

            <p class="mb-4 font-bold">Non cupidatat skateboard dolor brunch?</p>
            <p class="mb-12 text-neutral-500 dark:text-neutral-300">
                Distinctio corporis, iure facere ducimus quos consectetur ipsa ut
                magnam autem doloremque ex! Id, sequi. Voluptatum magnam sed fugit
                iusto minus et suscipit? Minima sunt at nulla tenetur, numquam
                unde quod modi magnam ab deserunt ipsam sint aliquid dolores
                libero repellendus cupiditate mollitia quidem dolorem odit
            </p>

            <p class="mb-4 font-bold">
                Praesentium voluptatibus temporibus consequatur non aspernatur?
            </p>
            <p class="mb-12 text-neutral-500 dark:text-neutral-300">
                Minima sunt at nulla tenetur, numquam unde quod modi magnam ab
                deserunt ipsam sint aliquid dolores libero repellendus cupiditate
                mollitia quidem dolorem.
            </p>
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
        <h2 class="mb-16 text-center text-3xl font-bold">
            Frequently asked questions
        </h2>

        <div class="grid gap-6 lg:grid-cols-3">
            <div class="mb-6 md:mb-8 lg:mb-12">
            <p class="mb-4 font-bold">Anim pariatur cliche reprehenderit?</p>
            <p class="text-neutral-500 dark:text-neutral-300">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt
                autem numquam dolore molestias aperiam culpa alias veritatis
                architecto eos, molestiae vitae ex eligendi libero eveniet
                dolorem, doloremque rem aliquid perferendis.
            </p>
            </div>

            <div class="mb-6 md:mb-8 lg:mb-12">
            <p class="mb-4 font-bold">Non cupidatat skateboard dolor brunch?</p>
            <p class="text-neutral-500 dark:text-neutral-300">
                Distinctio corporis, iure facere ducimus quos consectetur ipsa ut
                magnam autem doloremque ex! Id, sequi. Voluptatum magnam sed fugit
                iusto minus et suscipit? Minima sunt at nulla tenetur, numquam
                unde quod modi magnam ab deserunt ipsam sint aliquid dolores
                libero repellendus cupiditate mollitia quidem dolorem odit
            </p>
            </div>

            <div class="mb-6 md:mb-8 lg:mb-12">
            <p class="mb-4 font-bold">
                Praesentium voluptatibus temporibus consequatur non aspernatur?
            </p>
            <p class="text-neutral-500 dark:text-neutral-300">
                Minima sunt at nulla tenetur, numquam unde quod modi magnam ab
                deserunt ipsam sint aliquid dolores libero repellendus cupiditate
                mollitia quidem dolorem.
            </p>
            </div>

            <div class="mb-6 md:mb-8 lg:mb-12">
            <p class="mb-4 font-bold">
                Voluptatum magnam sed fugit iusto minus et suscipit?
            </p>
            <p class="text-neutral-500 dark:text-neutral-300">
                Laudantium perferendis, est alias iure ut veniam suscipit dolorem
                fugit. Et ipsam corporis earum ea ut quae cum non iusto blanditiis
                ipsum dolor eius reiciendis, velit adipisci quas.
            </p>
            </div>

            <div class="mb-6 md:mb-8 lg:mb-12">
            <p class="mb-4 font-bold">Minima sunt at nulla tenetur?</p>
            <p class="text-neutral-500 dark:text-neutral-300">
                Numquam unde quod modi magnam ab deserunt ipsam sint aliquid
                dolores libero repellendus cupiditate mollitia quidem dolorem odit
            </p>
            </div>

            <div class="mb-6 md:mb-8 lg:mb-12">
            <p class="mb-4 font-bold">
                Distinctio corporis, iure facere ducimus?
            </p>
            <p class="text-neutral-500 dark:text-neutral-300">
                Eaque eos corrupti debitis tenetur repellat, beatae quibusdam
                incidunt, fuga non iste dignissimos officiis nam officia obcaecati
                commodi ratione qui nesciunt.
            </p>
            </div>
        </div>
        </section>
        <!-- Section: Design Block -->
    </div>
<!-- Container for demo purpose -->






@endsection



@extends('layout.base')

@section('main')








      <!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32">
      {{-- <h2 class="mb-12 text-center text-3xl font-bold">
        Projects we are proud of
      </h2> --}}

      <div class="flex flex-wrap items-center">
        <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-6 lg:mb-0 lg:w-5/12">
          <div class="relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <img src="{{asset('/img/logo.jpg')}}" class="w-full" />
            <a href="#!">
              <div
                class="absolute overflow-hidden top-0 right-0 bottom-0 left-0 h-full w-full  bg-fixed">
                <div class="flex h-full items-center justify-center">
                  <div class="px-6 py-12 text-center text-white md:px-12">
                    {{-- <h3 class="mb-6 text-2xl font-bold uppercase">
                      Entrenando tus
                      <u class="text-[hsl(210,12%,80%)]">Finanzas</u>
                    </h3> --}}
                    {{-- <p class="text-[hsl(210,12%,80%)]">
                        surgió con la idea de brindar servicios financieros tanto educativos como de asesoría, posibilitando que todos puedan acceder a las inversiones independientemente de su formación, experiencia y capital.
                    </p> --}}
                  </div>
                </div>
              </div>
              <div class="relative overflow-hidden bg-cover bg-no-repeat">
                <div
                  class="absolute overflow-hidden top-0 right-0 bottom-0 left-0 h-full w-full bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="w-full shrink-0 grow-0 basis-auto md:px-6 lg:w-7/12">

            <div class="mb-12 flex">
                <div class="shrink-0">
                  <div class="rounded-md p-4 shadow-lg bg-[hsl(231,52.6%,20%)] dark:bg-[hsl(231,52.6%,30%)]" >
                    {{-- <img
                        src="{{asset('/img/logo.jpg')}}"
                        class="w-32 rounded-full"
                        alt="Avatar" /> --}}
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="h-6 w-6 text-white">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                    </svg> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="h-8 w-8 text-white"> <path d="M16.3445 8.93024L16.6889 6.09016L16.6889 6.09014C16.7692 5.4285 16.8093 5.09767 16.74 4.82267C16.6477 4.456 16.4231 4.14364 16.1158 3.95431C15.8853 3.81231 15.5764 3.76933 14.9587 3.68338C14.341 3.59742 14.0321 3.55444 13.7754 3.62863C13.433 3.72756 13.1414 3.96809 12.9647 4.29732C12.8321 4.54424 12.7489 5.23007 12.6687 5.89173L6.53714 5.03851C6.61739 4.37686 6.70057 3.69102 6.6313 3.41601C6.53895 3.04934 6.31439 2.73698 6.00703 2.54765C5.77651 2.40565 5.46765 2.36268 4.84993 2.27672C4.23222 2.19076 3.92336 2.14778 3.66662 2.22198C3.32429 2.3209 3.03268 2.56143 2.85592 2.89066C2.72336 3.13758 2.68323 3.46841 2.60299 4.13006L2.25853 6.97015C2.17828 7.6318 2.13816 7.96263 2.20742 8.23764C2.29978 8.60431 2.52433 8.91667 2.8317 9.106C3.06222 9.248 3.37107 9.29097 3.98878 9.37693L3.98879 9.37693L3.9888 9.37693C4.60651 9.46289 4.91537 9.50587 5.17211 9.43167C5.51443 9.33275 5.80605 9.09222 5.9828 8.76299C6.11537 8.51607 6.19855 7.83023 6.2788 7.16858L12.4103 8.0218C12.3301 8.68345 12.2469 9.36929 12.3162 9.6443C12.4085 10.011 12.6331 10.3233 12.9404 10.5127C13.171 10.6547 13.4798 10.6976 14.0975 10.7836L14.0975 10.7836L14.0975 10.7836C14.7153 10.8695 15.0241 10.9125 15.2809 10.8383C15.6232 10.7394 15.9148 10.4989 16.0915 10.1696C16.2241 9.92273 16.2642 9.59191 16.3445 8.93026L16.3445 8.93024Z" fill="#1C274C"></path> <path d="M7.76122 19.9255L7.0692 17.1591C6.90798 16.5146 6.82737 16.1924 6.86208 15.91C6.90836 15.5335 7.09239 15.192 7.37368 14.9608C7.58465 14.7874 7.88549 14.7011 8.48717 14.5284C9.08885 14.3557 9.3897 14.2694 9.65334 14.3066C10.0049 14.3561 10.3236 14.5533 10.5395 14.8546C10.7013 15.0805 10.8685 15.7486 11.0297 16.393L17.0021 14.6789C16.8408 14.0344 16.6737 13.3664 16.7084 13.084C16.7547 12.7075 16.9387 12.366 17.22 12.1348C17.431 11.9615 17.7318 11.8751 18.3335 11.7024C18.9352 11.5297 19.236 11.4434 19.4997 11.4806C19.8512 11.5301 20.17 11.7273 20.3858 12.0286C20.5477 12.2545 20.6283 12.5768 20.7895 13.2213L21.4815 15.9876C21.6428 16.6321 21.7234 16.9543 21.6887 17.2367C21.6424 17.6133 21.4584 17.9547 21.1771 18.1859C20.9661 18.3593 20.6653 18.4456 20.0636 18.6183L20.0636 18.6183L20.0636 18.6183C19.4619 18.791 19.161 18.8774 18.8974 18.8402C18.5459 18.7906 18.2271 18.5935 18.0113 18.2922C17.8494 18.0662 17.6823 17.3982 17.5211 16.7537L11.5487 18.4678C11.7099 19.1123 11.877 19.7803 11.8423 20.0627C11.796 20.4393 11.612 20.7807 11.3307 21.0119C11.1197 21.1853 10.8189 21.2716 10.2172 21.4443L10.2172 21.4443L10.2172 21.4443C9.61554 21.617 9.3147 21.7034 9.05105 21.6662C8.69952 21.6166 8.38077 21.4195 8.16493 21.1182C8.00305 20.8922 7.92244 20.57 7.76122 19.9255Z" fill="#1C274C"></path> </g></svg>
                  </div>
                </div>
                <div class="ml-4 grow">

                  <p class="text-neutral-500 dark:text-neutral-300">
                    Entrenando Tus Finanzas surgió con la idea de brindar servicios financieros tanto educativos como de asesoría, posibilitando que todos puedan acceder a las inversiones independientemente de su formación, experiencia y capital.

                  </p>
                </div>
              </div>
          <div class="mb-12 flex">
            <div class="shrink-0">
              <div class="rounded-md p-4 shadow-lg bg-[hsl(231,52.6%,20%)] dark:bg-[hsl(231,52.6%,30%)]" >
                {{-- <img
                    src="{{asset('/img/logo.jpg')}}"
                    class="w-32 rounded-full"
                    alt="Avatar" /> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-8 w-8 text-white"> <path d="M16.3445 8.93024L16.6889 6.09016L16.6889 6.09014C16.7692 5.4285 16.8093 5.09767 16.74 4.82267C16.6477 4.456 16.4231 4.14364 16.1158 3.95431C15.8853 3.81231 15.5764 3.76933 14.9587 3.68338C14.341 3.59742 14.0321 3.55444 13.7754 3.62863C13.433 3.72756 13.1414 3.96809 12.9647 4.29732C12.8321 4.54424 12.7489 5.23007 12.6687 5.89173L6.53714 5.03851C6.61739 4.37686 6.70057 3.69102 6.6313 3.41601C6.53895 3.04934 6.31439 2.73698 6.00703 2.54765C5.77651 2.40565 5.46765 2.36268 4.84993 2.27672C4.23222 2.19076 3.92336 2.14778 3.66662 2.22198C3.32429 2.3209 3.03268 2.56143 2.85592 2.89066C2.72336 3.13758 2.68323 3.46841 2.60299 4.13006L2.25853 6.97015C2.17828 7.6318 2.13816 7.96263 2.20742 8.23764C2.29978 8.60431 2.52433 8.91667 2.8317 9.106C3.06222 9.248 3.37107 9.29097 3.98878 9.37693L3.98879 9.37693L3.9888 9.37693C4.60651 9.46289 4.91537 9.50587 5.17211 9.43167C5.51443 9.33275 5.80605 9.09222 5.9828 8.76299C6.11537 8.51607 6.19855 7.83023 6.2788 7.16858L12.4103 8.0218C12.3301 8.68345 12.2469 9.36929 12.3162 9.6443C12.4085 10.011 12.6331 10.3233 12.9404 10.5127C13.171 10.6547 13.4798 10.6976 14.0975 10.7836L14.0975 10.7836L14.0975 10.7836C14.7153 10.8695 15.0241 10.9125 15.2809 10.8383C15.6232 10.7394 15.9148 10.4989 16.0915 10.1696C16.2241 9.92273 16.2642 9.59191 16.3445 8.93026L16.3445 8.93024Z" fill="#1C274C"></path> <path d="M7.76122 19.9255L7.0692 17.1591C6.90798 16.5146 6.82737 16.1924 6.86208 15.91C6.90836 15.5335 7.09239 15.192 7.37368 14.9608C7.58465 14.7874 7.88549 14.7011 8.48717 14.5284C9.08885 14.3557 9.3897 14.2694 9.65334 14.3066C10.0049 14.3561 10.3236 14.5533 10.5395 14.8546C10.7013 15.0805 10.8685 15.7486 11.0297 16.393L17.0021 14.6789C16.8408 14.0344 16.6737 13.3664 16.7084 13.084C16.7547 12.7075 16.9387 12.366 17.22 12.1348C17.431 11.9615 17.7318 11.8751 18.3335 11.7024C18.9352 11.5297 19.236 11.4434 19.4997 11.4806C19.8512 11.5301 20.17 11.7273 20.3858 12.0286C20.5477 12.2545 20.6283 12.5768 20.7895 13.2213L21.4815 15.9876C21.6428 16.6321 21.7234 16.9543 21.6887 17.2367C21.6424 17.6133 21.4584 17.9547 21.1771 18.1859C20.9661 18.3593 20.6653 18.4456 20.0636 18.6183L20.0636 18.6183L20.0636 18.6183C19.4619 18.791 19.161 18.8774 18.8974 18.8402C18.5459 18.7906 18.2271 18.5935 18.0113 18.2922C17.8494 18.0662 17.6823 17.3982 17.5211 16.7537L11.5487 18.4678C11.7099 19.1123 11.877 19.7803 11.8423 20.0627C11.796 20.4393 11.612 20.7807 11.3307 21.0119C11.1197 21.1853 10.8189 21.2716 10.2172 21.4443L10.2172 21.4443L10.2172 21.4443C9.61554 21.617 9.3147 21.7034 9.05105 21.6662C8.69952 21.6166 8.38077 21.4195 8.16493 21.1182C8.00305 20.8922 7.92244 20.57 7.76122 19.9255Z" fill="#1C274C"></path></svg>
              </div>
            </div>
            <div class="ml-4 grow">

              <p class="text-neutral-500 dark:text-neutral-300">
               La relación con las FINANZAS es que, sin dudas estas al igual que el cuerpo también deben ENTRENARSE. La única manera de hacer crecer un músculo es ejercitándolo, si no, se atrofia. Lo mismo sucede con nuestro dinero, si no lo entrenamos (movemos) y no lo ponemos a funcionar (circular) se atrofiará (dejará de crecer).

              </p>
            </div>
          </div>

          <div class="mb-12 flex">
            <div class="shrink-0">
              <div class="rounded-md p-4 shadow-lg bg-[hsl(231,52.6%,20%)] dark:bg-[hsl(231,52.6%,30%)]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-8 w-8 text-white"> <path d="M16.3445 8.93024L16.6889 6.09016L16.6889 6.09014C16.7692 5.4285 16.8093 5.09767 16.74 4.82267C16.6477 4.456 16.4231 4.14364 16.1158 3.95431C15.8853 3.81231 15.5764 3.76933 14.9587 3.68338C14.341 3.59742 14.0321 3.55444 13.7754 3.62863C13.433 3.72756 13.1414 3.96809 12.9647 4.29732C12.8321 4.54424 12.7489 5.23007 12.6687 5.89173L6.53714 5.03851C6.61739 4.37686 6.70057 3.69102 6.6313 3.41601C6.53895 3.04934 6.31439 2.73698 6.00703 2.54765C5.77651 2.40565 5.46765 2.36268 4.84993 2.27672C4.23222 2.19076 3.92336 2.14778 3.66662 2.22198C3.32429 2.3209 3.03268 2.56143 2.85592 2.89066C2.72336 3.13758 2.68323 3.46841 2.60299 4.13006L2.25853 6.97015C2.17828 7.6318 2.13816 7.96263 2.20742 8.23764C2.29978 8.60431 2.52433 8.91667 2.8317 9.106C3.06222 9.248 3.37107 9.29097 3.98878 9.37693L3.98879 9.37693L3.9888 9.37693C4.60651 9.46289 4.91537 9.50587 5.17211 9.43167C5.51443 9.33275 5.80605 9.09222 5.9828 8.76299C6.11537 8.51607 6.19855 7.83023 6.2788 7.16858L12.4103 8.0218C12.3301 8.68345 12.2469 9.36929 12.3162 9.6443C12.4085 10.011 12.6331 10.3233 12.9404 10.5127C13.171 10.6547 13.4798 10.6976 14.0975 10.7836L14.0975 10.7836L14.0975 10.7836C14.7153 10.8695 15.0241 10.9125 15.2809 10.8383C15.6232 10.7394 15.9148 10.4989 16.0915 10.1696C16.2241 9.92273 16.2642 9.59191 16.3445 8.93026L16.3445 8.93024Z" fill="#1C274C"></path> <path d="M7.76122 19.9255L7.0692 17.1591C6.90798 16.5146 6.82737 16.1924 6.86208 15.91C6.90836 15.5335 7.09239 15.192 7.37368 14.9608C7.58465 14.7874 7.88549 14.7011 8.48717 14.5284C9.08885 14.3557 9.3897 14.2694 9.65334 14.3066C10.0049 14.3561 10.3236 14.5533 10.5395 14.8546C10.7013 15.0805 10.8685 15.7486 11.0297 16.393L17.0021 14.6789C16.8408 14.0344 16.6737 13.3664 16.7084 13.084C16.7547 12.7075 16.9387 12.366 17.22 12.1348C17.431 11.9615 17.7318 11.8751 18.3335 11.7024C18.9352 11.5297 19.236 11.4434 19.4997 11.4806C19.8512 11.5301 20.17 11.7273 20.3858 12.0286C20.5477 12.2545 20.6283 12.5768 20.7895 13.2213L21.4815 15.9876C21.6428 16.6321 21.7234 16.9543 21.6887 17.2367C21.6424 17.6133 21.4584 17.9547 21.1771 18.1859C20.9661 18.3593 20.6653 18.4456 20.0636 18.6183L20.0636 18.6183L20.0636 18.6183C19.4619 18.791 19.161 18.8774 18.8974 18.8402C18.5459 18.7906 18.2271 18.5935 18.0113 18.2922C17.8494 18.0662 17.6823 17.3982 17.5211 16.7537L11.5487 18.4678C11.7099 19.1123 11.877 19.7803 11.8423 20.0627C11.796 20.4393 11.612 20.7807 11.3307 21.0119C11.1197 21.1853 10.8189 21.2716 10.2172 21.4443L10.2172 21.4443L10.2172 21.4443C9.61554 21.617 9.3147 21.7034 9.05105 21.6662C8.69952 21.6166 8.38077 21.4195 8.16493 21.1182C8.00305 20.8922 7.92244 20.57 7.76122 19.9255Z" fill="#1C274C"></path></svg>
              </div>
            </div>
            <div class="ml-4 grow">
              {{-- <p class="mb-2 font-bold">Safe and solid</p> --}}
              <p class="text-neutral-500 dark:text-neutral-300">
                Considero también que existe una gran carencia en la educación financiera en las aulas escolares, facultades e incluso en el hogar mismo por lo cual también existen diversos preconceptos (o conceptos erróneos) sobre el uso correcto del dinero y las inversiones.
              </p>
            </div>
          </div>

          <div class="mb-12 flex">
            <div class="shrink-0">
              <div class="rounded-md p-4 shadow-lg bg-[hsl(231,52.6%,20%)] dark:bg-[hsl(231,52.6%,30%)]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-8 w-8 text-white"> <path d="M16.3445 8.93024L16.6889 6.09016L16.6889 6.09014C16.7692 5.4285 16.8093 5.09767 16.74 4.82267C16.6477 4.456 16.4231 4.14364 16.1158 3.95431C15.8853 3.81231 15.5764 3.76933 14.9587 3.68338C14.341 3.59742 14.0321 3.55444 13.7754 3.62863C13.433 3.72756 13.1414 3.96809 12.9647 4.29732C12.8321 4.54424 12.7489 5.23007 12.6687 5.89173L6.53714 5.03851C6.61739 4.37686 6.70057 3.69102 6.6313 3.41601C6.53895 3.04934 6.31439 2.73698 6.00703 2.54765C5.77651 2.40565 5.46765 2.36268 4.84993 2.27672C4.23222 2.19076 3.92336 2.14778 3.66662 2.22198C3.32429 2.3209 3.03268 2.56143 2.85592 2.89066C2.72336 3.13758 2.68323 3.46841 2.60299 4.13006L2.25853 6.97015C2.17828 7.6318 2.13816 7.96263 2.20742 8.23764C2.29978 8.60431 2.52433 8.91667 2.8317 9.106C3.06222 9.248 3.37107 9.29097 3.98878 9.37693L3.98879 9.37693L3.9888 9.37693C4.60651 9.46289 4.91537 9.50587 5.17211 9.43167C5.51443 9.33275 5.80605 9.09222 5.9828 8.76299C6.11537 8.51607 6.19855 7.83023 6.2788 7.16858L12.4103 8.0218C12.3301 8.68345 12.2469 9.36929 12.3162 9.6443C12.4085 10.011 12.6331 10.3233 12.9404 10.5127C13.171 10.6547 13.4798 10.6976 14.0975 10.7836L14.0975 10.7836L14.0975 10.7836C14.7153 10.8695 15.0241 10.9125 15.2809 10.8383C15.6232 10.7394 15.9148 10.4989 16.0915 10.1696C16.2241 9.92273 16.2642 9.59191 16.3445 8.93026L16.3445 8.93024Z" fill="#1C274C"></path> <path d="M7.76122 19.9255L7.0692 17.1591C6.90798 16.5146 6.82737 16.1924 6.86208 15.91C6.90836 15.5335 7.09239 15.192 7.37368 14.9608C7.58465 14.7874 7.88549 14.7011 8.48717 14.5284C9.08885 14.3557 9.3897 14.2694 9.65334 14.3066C10.0049 14.3561 10.3236 14.5533 10.5395 14.8546C10.7013 15.0805 10.8685 15.7486 11.0297 16.393L17.0021 14.6789C16.8408 14.0344 16.6737 13.3664 16.7084 13.084C16.7547 12.7075 16.9387 12.366 17.22 12.1348C17.431 11.9615 17.7318 11.8751 18.3335 11.7024C18.9352 11.5297 19.236 11.4434 19.4997 11.4806C19.8512 11.5301 20.17 11.7273 20.3858 12.0286C20.5477 12.2545 20.6283 12.5768 20.7895 13.2213L21.4815 15.9876C21.6428 16.6321 21.7234 16.9543 21.6887 17.2367C21.6424 17.6133 21.4584 17.9547 21.1771 18.1859C20.9661 18.3593 20.6653 18.4456 20.0636 18.6183L20.0636 18.6183L20.0636 18.6183C19.4619 18.791 19.161 18.8774 18.8974 18.8402C18.5459 18.7906 18.2271 18.5935 18.0113 18.2922C17.8494 18.0662 17.6823 17.3982 17.5211 16.7537L11.5487 18.4678C11.7099 19.1123 11.877 19.7803 11.8423 20.0627C11.796 20.4393 11.612 20.7807 11.3307 21.0119C11.1197 21.1853 10.8189 21.2716 10.2172 21.4443L10.2172 21.4443L10.2172 21.4443C9.61554 21.617 9.3147 21.7034 9.05105 21.6662C8.69952 21.6166 8.38077 21.4195 8.16493 21.1182C8.00305 20.8922 7.92244 20.57 7.76122 19.9255Z" fill="#1C274C"></path></svg>
              </div>
            </div>
            <div class="ml-4 grow">
              {{-- <p class="mb-2 font-bold">Extremely fast</p> --}}
              <p class="text-neutral-500 dark:text-neutral-300">
                Al estar todos, sin excepciones de profesión, labor, ni oficio involucrados en su uso, considero que educarse al respecto es una cuestión FUNDAMENTAL para tener una buena salud financiera.
                Es por ello que te invito a ENTRENAR TUS FINANZAS conmigo, ¿empezamos?

              </p>
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
      <!-- Jumbotron -->
      <div class="container mx-auto text-center lg:text-left xl:px-32">
        <div class="flex grid items-center lg:grid-cols-2">
          <div class="mb-12 lg:mb-0">
            <div
              class="block rounded-lg bg-[hsla(0,0%,100%,0.55)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-[hsla(0,0%,5%,0.55)] dark:shadow-black/20 md:px-12 lg:-mr-14 backdrop-blur-[30px]">
              {{-- <h3 class="mb-3 text-2xl font-bold">
                We know how valuable your time is
              </h3>
              <h5 class="mb-12 text-lg font-bold text-primary dark:text-primary-400 lg:mb-10 xl:mb-12">
                Let us answer your questions
              </h5> --}}

              <p class="mb-4 font-bold">
                Qué hace un asesor financiero?
              </p>
              <p class="mb-6 text-gray-500 dark:text-neutral-300">
                Un asesor financiero es el intermediario entre el cliente inversor y el ALyC (Agente de Liquidación y Compensación) también conocido como Bróker.
                Es aquella persona que te guiará a cumplir tus objetivos financieros y que te brindará información y recomendaciones acordes a tu perfil y tus necesidades.
                <a href="/about">Sobre Mi</a>
              </p>

              <p class="mb-4 font-bold">
                Qué significa CNV?
              </p>
              <p class="mb-6 text-gray-500 dark:text-neutral-300">
                La Comisión Nacional de Valores (CNV) es el organismo que controla a los Agentes del Mercado, entre ellos a nosotros los asesores como Agentes Productores.
                Te recomiendo siempre revisar que quien te ofrezca productos financieros figure inscripto allí.
                Podés buscarme en el siguiente link con mi apellido: TIBERTI.
                Link a registros de idóneos:
                https://www.cnv.gov.ar/SitioWeb/RegistrosPublicos/Agentes

              </p>


            </div>
          </div>

          <div>
            <img src="{{asset('/img/dudas.jpg')}}"
              class="w-full rounded-lg shadow-lg dark:shadow-black/20" alt="" />
          </div>
        </div>
      </div>
      <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
  </div>
  <!-- Container for demo purpose -->






  <!-- Background image -->
    <!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="background-radial-gradient mb-32">
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

        <div class="px-6 py-12 text-center md:px-12 lg:text-left">
            <div class="container mx-auto">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                    <div class="mt-12 lg:mt-0">
                    <h1 class="mb-12 text-5xl font-bold tracking-tight text-[hsl(218,81%,95%)] md:text-6xl xl:text-7xl">
                        Video de presentacion  <br /><span class="text-[hsl(218,81%,75%)]">Estas preparado para invertir</span>
                    </h1>
                    <p class="text-lg text-[hsl(218,81%,95%)]">
                        Descripcion del video
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Minima officia consequatur adipisci tenetur repudiandae rerum
                        quos.
                    </p>
                    </div>
                    <div class="mb-12 lg:mb-0">
                    <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden rounded-lg shadow-lg"
                        style="padding-top: 56.25%">
                        <iframe class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 h-full w-full" width="853" height="480" src="https://www.youtube.com/embed/9VsKr-WRDAg" title="Curso Finanzas Personales - Presentación" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Container for demo purpose -->




@endsection



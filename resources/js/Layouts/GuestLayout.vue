<template>
    <div class="min-h-screen bg-gray-100">
        <nav
            class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
        >
            <div
                class="container px-4 mx-auto flex flex-wrap items-center justify-between"
            >
                <div
                    class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
                >
                    <a
                        :href="route('home')"
                        class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white flex flex-row"
                    >
                        <jet-application-mark class="block h-9 w-auto" />
                        <span
                            class="text-2xl font-semibold ml-2 text-indigo-700"
                            >Notch Relay</span
                        >
                    </a>
                    <button
                        class="cursor-pointer text-xl leading-none px-3 border border-solid border-transparent rounded bg-gray-100 block lg:hidden outline-none focus:outline-none"
                        type="button"
                        v-if="0 == 1"
                        @click="toggleNavbar()"
                    >
                        <svg
                            class="w-6 h-6 text-indigo-700"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                v-if="!showMenu"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            ></path>
                            <path
                                v-else
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            ></path>
                        </svg>
                    </button>
                </div>
                <div
                    class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                    :class="{ hidden: !showMenu, block: showMenu }"
                >
                    <ul class="flex flex-col lg:flex-row list-none mr-auto">
                        <li class="flex items-center">
                            <a
                                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                                href="/docs"
                                ><i
                                    class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"
                                ></i>
                                Docs</a
                            >
                        </li>
                    </ul>
                    <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                        <li class="flex items-center">
                            <a
                                :href="route('dashboard')"
                                v-if="$page.user"
                                class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 flex flex-row"
                                type="button"
                                style="transition: all 0.15s ease 0s;"
                            >
                                <svg
                                    class="w-4 h-4"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                    ></path>
                                </svg>
                                <span>Dashboard</span>
                            </a>
                            <a
                                :href="route('register')"
                                v-else
                                class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 flex flex-row"
                                type="button"
                                style="transition: all 0.15s ease 0s;"
                            >
                                <svg
                                    class="w-4 h-4 mr-1"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                                <span>Getting Started</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <slot></slot>
            <footer class="relative bg-gray-300 pt-8 pb-6">
                <div
                    class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                    style="height: 80px; transform: translateZ(0px);"
                >
                    <svg
                        class="absolute bottom-0 overflow-hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none"
                        version="1.1"
                        viewBox="0 0 2560 100"
                        x="0"
                        y="0"
                    >
                        <polygon
                            class="text-gray-300 fill-current"
                            points="2560 0 2560 100 0 100"
                        ></polygon>
                    </svg>
                </div>
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
                            <h4 class="text-3xl font-semibold">
                                Notch Relay
                            </h4>
                            <h5 class="text-lg mt-0 mb-2 text-gray-700">
                                Notch Relay is free marketing tool.
                            </h5>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="flex flex-wrap items-top mb-6">
                                <div class="w-full lg:w-4/12 px-4 ml-auto">
                                    <span
                                        class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                                        >Useful Links</span
                                    >
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                                href="https://www.github.com/chapdel/notchrelay"
                                                target="_blank"
                                                >Github</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-400" />
                    <div
                        class="flex flex-wrap items-center md:justify-between justify-center"
                    >
                        <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                            <div
                                class="text-sm text-gray-600 font-semibold py-1"
                            >
                                Copyright © 2020 Notch Relay.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </main>

        <!-- Modal Portal -->
        <portal-target name="modal" multiple> </portal-target>
    </div>
</template>

<script>
import JetApplicationMark from "@/Jetstream/ApplicationMark";

export default {
    components: {
        JetApplicationMark
    },

    data() {
        return {
            showMenu: false
        };
    },
    methods: {
        toggleNavbar: function() {
            alert("ddd");
            this.showMenu = !this.showMenu;
        }
    }
};
</script>

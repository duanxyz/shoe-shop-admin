<template>
    <auth>
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0"
                    >
                        <div class="rounded-t mb-0 px-6 py-6">
                            <div class="text-center mb-3">
                                <h6 class="text-gray-600 text-sm font-bold">
                                    Sign in with
                                </h6>
                            </div>
                            <div class="btn-wrapper text-center">
                                <button
                                    class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                                    type="button"
                                >
                                    <img
                                        alt="..."
                                        class="w-5 mr-1"
                                        src="img/github.svg"
                                    />
                                    Github
                                </button>
                                <button
                                    class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                                    type="button"
                                >
                                    <img
                                        alt="..."
                                        class="w-5 mr-1"
                                        src="img/google.svg"
                                    />
                                    Google
                                </button>
                            </div>
                            <hr class="mt-6 border-b-1 border-gray-400" />
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <div
                                class="text-gray-500 text-center mb-3 font-bold"
                            >
                                <small>Or sign in with credentials</small>
                            </div>
                            <form>
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                    >
                                        Email
                                    </label>
                                    <input
                                        type="email"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                        placeholder="Email"
                                    />
                                </div>

                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                    >
                                        Password
                                    </label>
                                    <input
                                        type="password"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                        placeholder="Password"
                                    />
                                </div>
                                <div>
                                    <label
                                        class="inline-flex items-center cursor-pointer"
                                    >
                                        <input
                                            id="customCheckLogin"
                                            type="checkbox"
                                            class="form-checkbox text-gray-800 ml-1 w-5 h-5 ease-linear transition-all duration-150"
                                        />
                                        <span
                                            class="ml-2 text-sm font-semibold text-gray-700"
                                        >
                                            Remember me
                                        </span>
                                    </label>
                                </div>

                                <div class="text-center mt-6">
                                    <button
                                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                        type="button"
                                    >
                                        Sign In
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-6 relative">
                        <div class="w-1/2">
                            <a href="javascript:void(0)" class="text-gray-300">
                                <small>Forgot password?</small>
                            </a>
                        </div>
                        <div class="w-1/2 text-right">
                            <router-link
                                to="/auth/register"
                                class="text-gray-300"
                            >
                                <small>Create new account</small>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </auth>
</template>
<script>
import Auth from "@/Layouts/Auth";

export default {
    data() {
        return {
            Auth,
        };
    },
};
</script>

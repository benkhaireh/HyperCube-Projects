import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("../views/HomePage.vue"),
    },
    {
        path: "/home",
        component: () => import("../views/HomePage.vue"),
    },
    {
        path: "/services",
        component: () => import("../views/ServicesPage.vue"),
    },
    {
        path: "/about",
        component: () => import("../views/AboutPage.vue"),
    },
    {
        path: "/contact",
        component: () => import("../views/ContactPage.vue"),
    },
    /* {
        path: "/allservices",
        component: () => import("../views/DisplayServices.vue"),
    }, */
    { path: "/:pathMatch(.*)*", component: () => import("../views/ErrorPage404.vue"), },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
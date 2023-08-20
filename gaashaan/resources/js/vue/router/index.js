import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("../views/Home.vue"),
    },
    {
        path: "/contactus",
        component: () => import("../views/Contact.vue"),
    },
    {
        path: "/aboutus",
        component: () => import("../views/About.vue"),
    },
    /* {
        path: "/services",
        component: () => import("../views/DisplayServices.vue"),
    }, */
    {
        path: "/prevent",
        component: () => import("../views/Prevent.vue"),
    },
    {
        path: "/monitor",
        component: () => import("../views/Monitor.vue"),
    },
    {
        path: "/protect",
        component: () => import("../views/Protect.vue"),
    },
    /* {
        path: "/allservices",
        component: () => import("../views/DisplayServices.vue"),
    }, */
    { path: "/:pathMatch(.*)*", component: () => import("../views/Page404.vue"), },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/home",
        component: () => import("../views/Home.vue"),
    },
    {
        path: "/guide",
        component: () => import("../views/PrinterGuide.vue"),
    },
    {
        path: "/options",
        component: () => import("../views/PrinterOptions.vue"),
    },
    {
        path: "/printcontroller",
        component: () => import("../views/PrintController.vue"),
    },
    {
        path: "/printerdevice",
        component: () => import("../views/PrinterDevice.vue"),
    },
    {
        path: "/scannerdevice",
        component: () => import("../views/ScannerDevice.vue"),
    },
    {
        path: "/faxdevice",
        component: () => import("../views/FaxDevice.vue"),
    },
    {
        path: "/maintenance",
        component: () => import("../views/PrinterMaintenance.vue"),
    },
    {
        path: "/:pathMatch(.*)*",
        component: () => import("../views/Page404.vue"),
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;

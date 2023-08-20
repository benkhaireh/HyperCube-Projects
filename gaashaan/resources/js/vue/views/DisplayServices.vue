<template>
    <section class="relative block w-full p-[50px] bg-[#141418]">
        <div class="relative block w-full max-w-[600px] z-10">
            <ul class="flex items-center">
                <li class="text-white bold mx-4">
                    <router-link to="/">Home</router-link>
                </li>
                <li class="text-white bold">></li>
                <li class="text-gray-400 mx-4 bold">Services</li>
            </ul>
            <div class="py-[140px]">
                <h2 class="text-[40px] text-white bold">
                    Get Comprehensive
                    <b class="bg-[#06a8d9] px-2 py-1"
                        >Cybersecurity Management</b
                    >
                </h2>
                <p class="text-[17px] text-gray-400">
                    From crisis control to proactive planning, we provide expert
                    guidance for your toughest cybersecurity challenges.
                </p>
            </div>
        </div>
        <div class="absolute top-[100px] right-[400px] z-0">
            <img src="/imgs/banner-shape-1.png" alt="Image" />
        </div>
        <div class="absolute top-[40px] right-[300px]">
            <img src="/imgs/banner-shape-4.png" alt="Image" />
        </div>
    </section>
    <section class="relative container mx-auto py-8">
        <div class="absolute top-[200px] left-[0px]">
            <img src="/imgs/consultations-shape-2.png" alt="Image" />
        </div>
        <div class="block max-w-[600px] mx-auto mb-[50px]">
            <p
                class="mb-[0.5rem] text-[#06a8d9] bold text-center max-w-sm mx-auto uppercase"
            >
                OUR SECURITY
                <b class="bg-[#06a8d9] px-2 py-[0.15rem] text-white"
                    >SOLUTIONS</b
                >
            </p>
            <h1 class="text-[38px] text-center bold text-[#f0f8ff]">
                Our Unique, Best Approach To Systems Implementation
            </h1>
            <p class="text-[17px] text-gray-400 text-center">
                Involved in the preventive, proactive and response aspects,
                offering a complete range of services for companies, based on
                the extensive expertise and experience of its internationally
                renowned experts.
            </p>
        </div>
        <ul class="lg:flex items-center justify-center lg:overflow-x-auto py-8"  id="list">
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeMainNav('PA')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold whitespace-nowrap"
                    :class="
                        mainNav == 'PA'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                    Prevent & Assess
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeMainNav('MDR')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold whitespace-nowrap"
                    :class="
                        mainNav == 'MDR'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                    Monitor & Detect & Respond
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeMainNav('P')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold whitespace-nowrap"
                    :class="
                        mainNav == 'P'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                    Protect
                </button>
            </li>
        </ul>
        <ul
            class="lg:flex items-center justify-center lg:overflow-x-auto py-8"
            v-if="mainNav == 'PA'"
        >
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('GV')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'GV'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                Vulnerability management
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('GC')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'GC'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                Compliance management
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('SE')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'SE'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                External Scan
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('V')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'V'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                Monitor
                </button>
            </li>
        </ul>
        <ul
            class="lg:flex items-center justify-center lg:overflow-x-auto py-8"
            v-if="mainNav == 'MDR'"
        >
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('M24')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'M24'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                    Monitoring 24/7
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('DI')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'DI'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                Intrusion detection
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('RI')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'RI'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                Incident Response
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('TI')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'TI'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                    Threat Intelligence
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('AP')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'AP'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                    Anti-Phishing
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('MW')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'MW'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                    Monitoring web
                </button>
            </li>
        </ul>
        <ul
            class="lg:flex items-center justify-center lg:overflow-x-auto py-8"
            v-if="mainNav == 'P'"
        >
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('VC')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'VC'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                    Virtual CISO
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('STO')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'STO'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                Technical & Operational support
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('GDS')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'GDS'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                Management of security devices
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('GL')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'GL'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                Logs management
                </button>
            </li>
        </ul>
        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'GV'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_GV.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        Conduct periodic system scans to identify vulnerabilities and
                        identify vulnerabilities and ensure that they are corrected
                        this will provide customers with a vulnerability management
                        process for managing vulnerabilities.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        Customers will also have periodic reports
                        describing identified vulnerabilities and KPIs measuring the
                        measuring the level of security.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'GC'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_GC.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        Conduct periodic tests to measure system compliance with
                        compliance with standards, policies and best practices.
                        policies and best practices.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        The compliance reports will help the CISO, CIO or even the
                        even the CEO to have a dashboard and take the necessary
                        necessary actions in case of failure.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'SE'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_SE.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        The external perimeter scan provides the list of services
                        list of services accessible from the Internet and the
                        associated vulnerabilities, by conducting periodic scans.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        This will allow us to identify any changes and to follow up on
                        follow up on the correction of the flaws.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'V'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_V.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        The monitoring service allows us to inform our clients of
                        all the news that concern them in terms of new vulnerabilities
                        new vulnerabilities, new software versions, exploits
                        exploits, attacks, etc.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        This is a personalized service for each client, depending on
                        the systems deployed in its perimeter.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'M24'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_M24.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        Monitoring is provided by a SEIM solution, which
                        deployed at the customer's site, collecting and analyzing
                        security events.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        Security monitoring provides real-time monitoring of
                        activity across the client infrastructure in real time.
                        infrastructure.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        Upon detection of any suspicious activity, the customer is
                        is automatically alerted.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        Periodic reports are also sent to clients.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'DI'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_DI.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        Through this service, the customer will benefit from
                        traffic analysis and detection of intrusion or
                        security violations.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        This involves deploying an I DS probe with a dedicated
                        dedicated monitoring service on the alerts of this probe.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        The client will benefit from the team's expertise in
                        in terms of analysis and detection of intrusion.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'RI'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_RI.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        It is the rapid intervention in case of an incident with the
                        to neutralize the attack, restore the situation and
                        situation and make all necessary investigations to reconstruct the
                        to reconstitute the attack scenario.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        The client will be provided with a report describing the incident and
                        recommendations to avoid its repetition.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        The team can be dispatched on site to provide the necessary
                        the necessary assistance to the customer.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'TI'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_TI.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        Provide oversight on cyber threats that may affect the company
                        that may affect the company, which will be informed about
                        on any news concerning cyber security at the national and international level.
                        national and international level.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        Cyber threats can be data leaks,
                        new attacks, stolen accounts, attacks
                        in the works, etc.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        The team also monitors the Dark Web.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'AP'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_AP.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        Ensure a monitoring activity to detect any
                        phishing attacks on customers and to intervene quickly to alert and
                        intervene quickly to alert and neutralize the
                        the attack.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        Our detection mechanisms and procedures allow us to
                        to ensure 24/7 monitoring of all types of phishing
                        and whatever the communication channel (email, URL,
                        social networks, app. Mobile, etc.).
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'MW'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_MW.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        Real-time supervision of web sites to detect and alert on
                        to detect and alert on web-defacement or malicious
                        injection of malicious content or degradation of the
                        service degradation.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'VC'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_VC.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        It is a question of outsourcing the CISO function or a
                        part.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        This helps companies by benefiting from the expertise of the Gaashan
                        of the Gaashan team and to have a permanent assistance
                        assistance.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        It is a means to adequately cover the
                        functions of CISO.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'STO'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_STO.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        The role of this department is to improve the management of
                        security operations of customers.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        These services are designed to enhance the capabilities of
                        of client employees by providing assistance on how to
                        on how to maintain a robust security practice, upgrade technology
                        practice, upgrade technology and lead staff to their maximum
                        staff to their maximum potential.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'GDS'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_GDS.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        It is a managed management of the security devices
                        deployed at the customer's site, this allows to
                        to benefit from the team's expertise and to outsource
                        these functions which are sometimes quite complex.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        This ensures that the security infrastructure
                        infrastructure is functioning as intended and is constantly and
                        updated and configured in an optimal way.
                        optimally.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'GL'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_GL.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        It is an operation of collection and centralization of
                        centralization of the logs, with the implementation of
                        protection devices such as backup, archiving
                        archiving, integrity control, etc.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        It is also a question of putting a provision to allow
                        exploitation of the logs.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-[80px]">
        <div class="absolute top-[50px] left-[0px]">
            <img src="/imgs/testimonial-shape-2.png" alt="Image" />
        </div>
        <div class="block max-w-[600px] mx-auto">
            <h1 class="text-[3rem] text-center bold text-[#f0f8ff] uppercase">
                Experienced & Trusted
            </h1>
            <p
                class="text-[17px] leading-[26px] font-[400] text-gray-400 text-center"
            >
                We're true experts who understand risk reduction priorities and
                technologies. Trusted by world's leading companies, we also
                provide you security with 24/7 continuous support.
            </p>
        </div>
        <div class="container mx-auto mt-[100px]">
            <div class="flex items-center justify-between">
                <div class="block w-[300px] bg-gray-200 p-2 rounded-lg mx-4">
                    <img
                        src="/imgs/fortinet_logo.png"
                        alt="Fortinet Partner"
                        class="block w-full"
                    />
                </div>
                <div class="block w-[300px] bg-gray-200 p-2 rounded-lg mx-4">
                    <img
                        src="/imgs/cisco_logo.png"
                        alt="Fortinet Partner"
                        class="block w-full"
                    />
                </div>
                <div class="block w-[300px] bg-gray-200 p-2 rounded-lg mx-4">
                    <img
                        src="/imgs/thales_logo.png"
                        alt="Fortinet Partner"
                        class="block w-full"
                    />
                </div>
                <div class="block w-[300px] bg-gray-200 p-2 rounded-lg mx-4">
                    <img
                        src="/imgs/oracle_logo.png"
                        alt="Fortinet Partner"
                        class="block w-full"
                    />
                </div>
            </div>
        </div>
    </section>
    <section
        class="relative block w-full py-[50px] md:py-[70px] mt-[150px] bg-[#1D212B]"
    >
        <div class="container mx-auto">
            <div class="flex flex-wrap md:flex-nowrap items-center px-8">
                <div class="block w-full my-4">
                    <h2 class="text-[32px] text-white bold">
                        Ready To Get Free Consultations For Powerful Cyber
                        Security Solutions?
                    </h2>
                </div>
                <div class="block w-full my-4">
                    <div class="text-right">
                        <button
                            @click="quote = true"
                            type="button"
                            class="px-[30px] py-[16px] text-white bg-[#266fe2] border-[#266fe2] rounded-[50px] font-[700] text-[16px] leading-[15px] cursor-pointer"
                        >
                            Get A Quote
                            <i
                                class="ri-arrow-right-line text-lg relative left-[3px] top-[3px]"
                            ></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-[100px]">
            <img src="/imgs/consultations-shape-1.png" alt="Image" />
        </div>
        <div class="absolute top-0 right-[500px]">
            <img src="/imgs/consultations-shape-2.png" alt="Image" />
        </div>
    </section>

    <section class="fixed top-0 left-0 right-0 z-[1000] backdrop" v-if="quote">
        <div
            class="relative mx-auto px-4 md:px-auto w-full lg:w-2/4 sm:w-4/5 pt-8 pb-8 h-full z-10 overflow-y-auto"
            v-click-away="hideQuote"
        >
            <form
                action=""
                class="px-4 py-6 md:px-8 shadow-lg rounded-xl bg-white"
                @submit.prevent="sendquote"
            >
                <h2
                    class="flex items-center justify-between w-full px-2 py-2 mb-6 border-b border-gray-400"
                >
                    <span class="text-brand-primary font-bold"
                        >Quote request form</span
                    >
                    <i class="ri-money-dollar-circle-fill font-bold"></i>
                </h2>
                <div class="flex-1 mr-4">
                    <input-comp
                        type="text"
                        label="fullname"
                        label_txt="Your first & last name"
                        icon="user"
                        v-model="formData.fullname"
                        :error="error.fullname"
                        required
                    />
                </div>
                <div class="flex-1 mr-4">
                    <input-comp
                        type="email"
                        label="email"
                        label_txt="Your email address"
                        icon="at"
                        v-model="formData.email"
                        :error="error.email"
                        required
                    />
                </div>
                <div class="flex-1 mr-4">
                    <input-comp
                        type="number"
                        label="phone"
                        label_txt="Your mobile number"
                        icon="phone"
                        v-model="formData.phone"
                        :error="error.phone"
                        required
                    />
                </div>
                <div class="block w-full mb-4 mr-4">
                    <span class="block text-grey-darker font-bold mb-2"
                        >Service selection</span
                    >
                    <vue-multiselect
                        v-model="formData.service"
                        :options="options"
                        :allow-empty="false"
                        :taggable="true"
                        :multiple="true"
                    >
                    </vue-multiselect>
                    <small
                        class="flex items-start text-red-500 mt-2 font-bold"
                        v-if="error.service"
                    >
                        <i class="ri-alert-fill mr-2"></i>
                        <span v-text="error.service"></span>
                    </small>
                </div>
                <div class="flex justify-between mt-8">
                    <button
                        type="button"
                        class="inline-block px-4 py-2 text-white bg-brand-secondary rounded-lg mr-8"
                        @click="hideQuote"
                    >
                        Annuler
                    </button>
                    <button
                        type="submit"
                        class="inline-block px-4 py-2 text-white bg-brand-primary rounded-lg"
                    >
                        Get the quote
                    </button>
                </div>
            </form>
        </div>
    </section>

    <div
        class="fixed top-0 left-0 right-0 bottom-0 flex items-center justify-center z-[1001]"
        v-if="loader"
    >
        <div class="absolute top-0 left-0 right-0 bottom-0 backdrop"></div>
        <div class="lds-ripple z-10">
            <div></div>
            <div></div>
        </div>
    </div>

    <div v-if="alert">
        <alert-comp
            :alertType="altType"
            :alertTxt="altTxt"
            :alertLang="altLang"
            @alert="theAlert"
        />
    </div>
</template>
<script>
import InputComp from "../components/inputcomp.vue";
import VueMultiselect from "vue-multiselect";
import AlertComp from "../components/AlertComp.vue";
export default {
    name: "allservice",
    components: {
        InputComp,
        VueMultiselect,
        AlertComp,
    },
    data() {
        return {
            mainNav: "PA",
            secondNav: "GV",
            formData: {
                fullname: "",
                email: "",
                phone: "",
                service: "Monitoring 24/7",
                recaptcha: "",
            },
            error: {
                fullname: "",
                email: "",
                phone: "",
                service: "",
            },
            options: [
                "Monitoring 24/7",
                "Intrusion Detection",
                "Incident Response",
                "Threat Intelligence",
                "Anti-Phishing",
                "Web Monitoring",
                "Virtual CISO",
                "Technical & Operational Support",
                "Security Devices Management",
                "Logs management",
            ],
            loader: false,
            csrf_token: document
                .querySelector('meta[name="_token"]')
                .getAttribute("content"),
            alert: false,
            altType: "",
            altTxt: "",
            altLang: "fr",
            quote: false,
        };
    },
    methods: {
        changeMainNav: function (mainNav) {
            this.mainNav = mainNav;
            switch (mainNav) {
                case "PA":
                    this.secondNav = "GV";
                    break;
                case "MDR":
                    this.secondNav = "M24";
                    break;
                case "P":
                    this.secondNav = "VC";
                    break;

                default:
                    break;
            }
        },
        changeSecondNav: function (secondNav) {
            this.secondNav = secondNav;
        },
        theAlert: function (e) {
            this.alert = e;
        },
        hideQuote: function () {
            this.quote = false;
        },
        sendquote: function () {
            this.loader = true;

            const header = {
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": this.csrf_token,
                },
            };

            const body = JSON.stringify(this.formData);

            const getting = async () => {
                await this.$recaptchaLoaded();
                const token = await this.$recaptcha("quote");
                this.formData.recaptcha = token;

                let data = await axios
                    .post("/send/quote/", body, header)
                    .then((response) => {
                        return response.data;
                    })
                    .catch(function (error) {
                        if (error.response) {
                            console.error(error.response);
                        }
                    });
                if (data.code == "CREDENTIALS") {
                    const errors = Object.keys(data.message);
                    for (let i = 0; i < errors.length; i++) {
                        const errorTxt = data.message[errors[i]];
                        this.error[errors[i]] = errorTxt.toString();
                    }
                } else if (data.code == "SUCCESS") {
                    this.alert = true;
                    this.altType = "success";
                    this.altTxt = data.message;
                    this.formData.fullname = "";
                    this.formData.email = "";
                    this.formData.phone = "";
                    this.formData.service = "";
                } else if (data.code == "UNKNOWN") {
                    this.alert = true;
                    this.altType = "error";
                    this.altTxt = data.message;
                } else {
                    console.log(data);
                }

                this.loader = false;
                this.quote = false;
            };

            setTimeout(() => {
                this.loader = false;
            }, 30000);
            getting();
        },
    },
};
</script>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>

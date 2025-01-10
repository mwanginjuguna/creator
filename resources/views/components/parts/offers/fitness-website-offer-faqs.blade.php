<?php

$faqsList = [
    [
        "question" => 'What does the "100% FREE Web-Hosting for the first 3 months" offer include?',
        "answer" => "Our special offer provides you with three months of completely free web hosting, allowing you to launch your website without any upfront costs. After the initial period, hosting will be charged at just 1199/- per month or 14388/- annually, ensuring you have a reliable platform for your business.",
    ],
    [
        "question" => "Is the domain really free for an entire year? What’s the catch?",
        "answer" => "Yes! When you sign up for our website development services, you receive a 100% free domain for one year. There are no hidden fees or catches—this is our way of helping you establish your online presence without additional costs.",
    ],
    [
        "question" => "What kind of support can I expect during the first month?",
        "answer" => "We provide ongoing support for the first month after your website goes live. Our team will assist you with any questions or technical issues to ensure everything runs smoothly and you’re fully satisfied with your new site.",
    ],
    [
        "question" => "How quickly can I expect my personalized website to be delivered?",
        "answer" => "Your beautiful, personalized website will be delivered within just 6 hours! We understand that time is crucial for your business, and we aim to get you online as quickly as possible without compromising quality.",
    ],
    [
        "question" => "What features are included in the website?",
        "answer" => "Your website comes equipped with an admin portal, booking and contact forms out of the box, a free blog setup to share valuable content, integrated client testimonials section, and usage & visitor analytics to track performance—all designed to enhance your online presence and credibility.",
    ],
    [
        "question" => 'How does the SSL certificate enhance my website\'s security?',
        "answer" => "The 100% FREE FOREVER SSL ensures that all communications between your website and its visitors are encrypted and secure. This builds trust with your clients and protects sensitive information, making your site safer against cyber threats.",
    ],
    [
        "question" => "What if I need more features or customizations later on?",
        "answer" => "We offer various upgrade options and additional features that can be integrated into your website as your business grows. Whether it’s e-commerce capabilities or advanced analytics, we can tailor solutions to meet your evolving needs.",
    ],
    [
        "question" => "Are there any long-term contracts I need to commit to?",
        "answer" => "No long-term contracts! You can choose to continue our services after the initial free period without being locked into a lengthy agreement. Our goal is to provide value that keeps you coming back because you want to, not because you have to.",
    ],
    [
        "question" => "How do I access my usage & visitor analytics?",
        "answer" => 'Once your website is live, you\'ll have access to a user-friendly dashboard where you can view real-time analytics about your site’s performance, visitor behavior, and conversion rates—empowering you to make data-driven decisions.',
    ],
    [
        "question" => "Can I cancel my service at any time?",
        "answer" => "Absolutely! You can cancel at any time without penalties during the initial free period or afterward. We’re confident that our services will provide significant value to your business, but if you decide otherwise, we respect your choice.",
    ],
];

?>

<div x-data="{ openIndex: null }" class="max-w-2xl mx-auto mt-8">
    <h2 class="font-semibold text-sm mb-1">Frequently Asked Questions</h2>

    <p class="font-medium text-2xl mb-2">You might be wondering about these questions</p>

    @foreach ($faqsList as $index => $faq)
        <div class="border-b border-gray-200">
            <button @click="openIndex === {{ $index }} ? openIndex = null : openIndex = {{ $index }}"
                class="flex justify-between items-center w-full py-4 text-left focus:outline-none">
                <span class="font-semibold">{{ $faq["question"] }}</span>
                <svg x-show="openIndex === {{ $index }}" xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 9l3 3-3 3m8-6l3 3-3 3" />
                </svg>
                <svg x-show="openIndex !== {{ $index }}" xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12H9m6 0l-3-3m3 3l-3 3" />
                </svg>
            </button>
            <div x-show.transition.duration.300ms="openIndex === {{ $index }}" class="py-2 pl-4">
                <p>{{ $faq["answer"] }}</p>
            </div>
        </div>
    @endforeach
</div>

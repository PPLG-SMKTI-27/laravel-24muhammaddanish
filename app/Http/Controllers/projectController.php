<?php

namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class ProjectController extends Controller
{
    /**
     * Display all projects
     */
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'E-commerce Platform Premium',
                'category' => 'web fullstack',
                'filter_category' => 'web',
                'description' => 'Platform e-commerce lengkap dengan sistem pembayaran terintegrasi, manajemen inventaris canggih, dan dashboard admin yang powerful. Dibangun dengan teknologi modern untuk performa optimal.',
                'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80',
                'icon' => 'fas fa-shopping-cart',
                'technologies' => ['Laravel', 'MySQL', 'Vue.js', 'Stripe'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 2,
                'title' => 'Music Streaming App',
                'category' => 'mobile',
                'filter_category' => 'mobile',
                'description' => 'Aplikasi streaming musik dengan rekomendasi personalisasi AI, playlist dinamis berdasarkan mood, dan kemampuan streaming offline. Pengalaman musik yang immersive dan personal.',
                'image' => 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'icon' => 'fas fa-music',
                'technologies' => ['React Native', 'Node.js', 'MongoDB', 'Socket.io'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 3,
                'title' => 'Analytics Dashboard',
                'category' => 'web design',
                'filter_category' => 'design',
                'description' => 'Dashboard analitik dengan visualisasi data real-time untuk bisnis. Desain fokus pada usability dan aksesibilitas dengan berbagai chart interaktif yang membantu pengambilan keputusan.',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'icon' => 'fas fa-chart-line',
                'technologies' => ['Vue.js', 'D3.js', 'Laravel API', 'PostgreSQL'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 4,
                'title' => 'Project Management Tool',
                'category' => 'fullstack',
                'filter_category' => 'fullstack',
                'description' => 'Aplikasi manajemen proyek kolaboratif dengan fitur task assignment, timeline visual, dan real-time updates. Dibangun dengan MERN stack dan WebSocket untuk komunikasi real-time.',
                'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'icon' => 'fas fa-tasks',
                'technologies' => ['MERN Stack', 'WebSockets', 'JWT', 'Firebase'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 5,
                'title' => 'Health & Fitness App',
                'category' => 'design',
                'filter_category' => 'design',
                'description' => 'Desain UI/UX untuk aplikasi kesehatan dan kebugaran dengan tracking aktivitas, monitoring nutrisi, dan progress tracking. Fokus pada user experience yang intuitif dan motivasi pengguna.',
                'image' => 'https://images.unsplash.com/photo-1505228395891-9a51e7e86e81?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'icon' => 'fas fa-heartbeat',
                'technologies' => ['Flutter', 'Firebase', 'Dart', 'Google Fit API'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 6,
                'title' => 'Social Media Clone',
                'category' => 'web',
                'filter_category' => 'web',
                'description' => 'Platform media sosial dengan fitur posting, komentar, likes, dan real-time notifications. Dibangun dengan teknologi modern dan optimisasi performa tinggi.',
                'image' => 'https://images.unsplash.com/photo-1611532736579-6b16e2b50449?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'icon' => 'fas fa-share-alt',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Redis'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 7,
                'title' => 'Event Booking System (Terbaru!)',
                'category' => 'fullstack',
                'filter_category' => 'fullstack',
                'description' => 'Sistem pemesanan acara dengan kalender interaktif, pembayaran online, dan manajemen tiket otomatis. Fitur terbaru dengan notifikasi real-time.',
                'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'icon' => 'fas fa-calendar-alt',
                'technologies' => ['Laravel', 'Vue.js', 'Stripe API', 'FullCalendar'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 8,
                'title' => 'Online Learning Platform (TERBARU!)',
                'category' => 'fullstack',
                'filter_category' => 'fullstack',
                'description' => 'Platform pembelajaran online dengan sistem kursus interaktif, video streaming, pelacakan kemajuan, dan sistem penilaian otomatis. Mendukung pembelajaran jarak jauh yang komprehensif.',
                'image' => 'https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'icon' => 'fas fa-graduation-cap',
                'technologies' => ['Laravel', 'Vue.js', 'Stripe API', 'WebRTC'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 9,
                'title' => 'Real Estate Marketplace',
                'category' => 'web',
                'filter_category' => 'web',
                'description' => 'Marketplace properti dengan fitur listing properti, virtual tour, dan sistem booking. Dilengkapi dengan mapping integration dan advanced search filters.',
                'image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'icon' => 'fas fa-home',
                'technologies' => ['Laravel', 'Vue.js', 'Google Maps API', 'Mapbox'],
                'demo_url' => '#',
                'source_url' => '#'
            ],

            [
                'id' => 10,
                'title' => 'Travel Booking Website',
                'category' => 'web design',
                'filter_category' => 'design',
                'description' => 'Situs web pemesanan perjalanan dengan desain menarik, sistem pencarian paket wisata, dan integrasi pembayaran. Fokus pada user experience yang mudah dan menyenangkan.',
                'image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'icon' => 'fas fa-plane',
                'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'Figma'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 11,
                'title' => 'Anime Hub Mobile App',
                'category' => 'mobile',
                'filter_category' => 'mobile',
                'description' => 'Aplikasi mobile untuk penggemar anime dengan fitur streaming, rekomendasi personalisasi, dan komunitas penggemar. Desain user-friendly dengan navigasi intuitif.',
                'image' => '/images/maple.jpg',
                'icon' => 'fas fa-film',
                'technologies' => ['React Native', 'Node.js', 'MongoDB', 'Firebase', 'API Anime'],
                'demo_url' => '#',
                'source_url' => '#'
            ]
        ];

        return view('projects', ['projects' => $projects]);
    }

    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        return view('nama', [
            'Danish' => User::findOrFail($id)
        ]);
    }

    /**
     * Show the name with a given parameter.
     */
    public function tampilkanNama(string $nama): View
    {
        return view('nama', [
            'nama' => $nama
        ]);
    }
}
<hr>

<x-nav-link href="/" :active="request()->is('home')">Home</x-nav-link>
<x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
<x-nav-link href="/project" :active="request()->is('project')">Project</x-nav-link>
<x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
<x-nav-link href="/employee" :active="request()->is('employee')">Employee</x-nav-link>
<x-nav-link href="/student" :active="request()->is('student')">Student</x-nav-link>

<hr>
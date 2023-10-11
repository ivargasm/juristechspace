import NavLink from '@/Components/NavLink'
import ResponsiveNavLink from '@/Components/ResponsiveNavLink'
import { Link, Head } from '@inertiajs/react'
import { useState, useEffect } from 'react'



export default function Welcome({ auth }) {

    const initialDarkMode = localStorage.getItem('dark-mode') || 'light';
    const [darkMode, setDarkMode] = useState(initialDarkMode);

    function toggleDarkMode() {
        const newMode = darkMode === 'dark' ? 'light' : 'dark';
        setDarkMode(newMode);
        localStorage.setItem('dark-mode', newMode);
    }
    
    useEffect(() => {
        if (darkMode === 'dark') {
            document.documentElement.classList.remove('light');
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
            document.documentElement.classList.add('light');
        }
    }, [darkMode]);
    


    return (
        <>
            <Head title="Welcome" />
            <div className="flex flex-col sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                <nav className='flex justify-end w-full'>
                    {auth.user ? (
                        <>
                            <NavLink active={route().current('home')} href={route('home')} className='text-gray-800 dark:text-gray-100'>Home</NavLink>
                            <NavLink active={route().current('dashboard')} href={route('dashboard')} className='text-gray-800 dark:text-gray-100'>Dashboard</NavLink>
                            <NavLink active={route().current('register')} href={route('register')} className='text-gray-800 dark:text-gray-100'>Register</NavLink>
                            <NavLink className='text-gray-800 dark:text-gray-100'>
                                <button
                                    onClick={toggleDarkMode}
                                >
                                    {darkMode === 'dark'
                                        ? <svg width="24" height="24" fill="none" aria-hidden="true" className="transform transition-transform duration-300 text-gray-800 dark:text-gray-100"><path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" fill="currentColor" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"></path><path d="M12 4v1M18 6l-1 1M20 12h-1M18 18l-1-1M12 19v1M7 17l-1 1M5 12H4M7 7 6 6" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"></path></svg>
                                        : <svg width="24" height="24" fill="none" aria-hidden="true" className="transform transition-transform duration-500 text-gray-800 dark:text-gray-100"><path d="M18 15.63c-.977.52-1.945.481-3.13.481A6.981 6.981 0 0 1 7.89 9.13c0-1.185-.04-2.153.481-3.13C6.166 7.174 5 9.347 5 12.018A6.981 6.981 0 0 0 11.982 19c2.67 0 4.844-1.166 6.018-3.37ZM16 5c0 2.08-.96 4-3 4 2.04 0 3 .92 3 3 0-2.08.96-3 3-3-2.04 0-3-1.92-3-4Z" fill="currentColor" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"></path></svg> 
                                    }
                                </button>
                            </NavLink>
                        </>
                    ):(
                        <>
                            <NavLink active={route().current('login')} href={route('login')}>
                                Log in
                            </NavLink>
                        </>
                    )}
                </nav>


                <div className="max-w-7xl mx-auto p-6 lg:p-8">
                    <p className='text-slate-900 dark:text-slate-100 text-xl font-bold mb-4'>API Quizz estamos trabajando en el sitio 👷‍♂️</p>
                </div>
            </div>
        </>
    )
}

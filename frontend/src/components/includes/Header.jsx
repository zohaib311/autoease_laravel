import { useState } from "react";
import { Menu, Moon, ShoppingCart, Sun, X } from "lucide-react";
import { Link } from "react-router-dom";

export default function Header({ isDark, onToggleTheme }) {
  const [isOpen, setIsOpen] = useState(false);
  const headerClasses = isDark
    ? "sticky top-0 z-50 bg-gray-900 text-gray-100 shadow-md"
    : "sticky top-0 z-50 bg-white text-gray-900 shadow-md";
  const logoTextClasses = isDark ? "text-2xl font-bold text-gray-100" : "text-2xl font-bold text-gray-900";
  const logoAccentClasses = isDark ? "text-indigo-400" : "text-indigo-600";
  const navTextClasses = isDark ? "hidden md:flex space-x-8 text-gray-300 font-medium" : "hidden md:flex space-x-8 text-gray-700 font-medium";
  const rightSideClasses = isDark ? "flex items-center space-x-4 text-gray-200" : "flex items-center space-x-4 text-gray-700";
  const mobileMenuClasses = isDark ? "md:hidden bg-gray-900 shadow-lg" : "md:hidden bg-white shadow-lg";
  const mobileTextClasses = isDark ? "flex flex-col px-6 py-4 space-y-4 text-gray-300 font-medium" : "flex flex-col px-6 py-4 space-y-4 text-gray-700 font-medium";

  return (
    <header className={headerClasses}>
      <div className="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        {/* Logo */}
        <h1 className={logoTextClasses}>
          Shirts <span className={logoAccentClasses}>Store</span>
        </h1>

        {/* Desktop Nav */}
        <nav className={navTextClasses}>
          <Link to="/" className="hover:text-indigo-600 transition">
            Home
          </Link>
          <Link to="/shop" className="hover:text-indigo-600 transition">
            Shop
          </Link>
          <Link to="/about" className="hover:text-indigo-600 transition">
            About
          </Link>
          <Link to="/contact" className="hover:text-indigo-600 transition">
            Contact
          </Link>
        </nav>

        {/* Right Side */}
        <div className={rightSideClasses}>
          <button
            type="button"
            onClick={onToggleTheme}
            aria-label={isDark ? "Switch to light mode" : "Switch to dark mode"}
            className="rounded-md p-1 hover:text-indigo-600 transition"
          >
            {isDark ? <Sun className="w-5 h-5" /> : <Moon className="w-5 h-5" />}
          </button>
          <ShoppingCart className="w-6 h-6 cursor-pointer hover:text-indigo-600 transition" />

          {/* Mobile Menu Button */}
          <button className="md:hidden" onClick={() => setIsOpen(!isOpen)}>
            {isOpen ? <X size={26} /> : <Menu size={26} />}
          </button>
        </div>
      </div>

      {/* Mobile Menu */}
      {isOpen && (
        <div className={mobileMenuClasses}>
          <div className={mobileTextClasses}>
            <a href="#">Home</a>
            <a href="#">Shop</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
          </div>
        </div>
      )}
    </header>
  );
}

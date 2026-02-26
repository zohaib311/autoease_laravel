import { useEffect, useState } from "react";
import { Outlet } from "react-router-dom";
import Header from "../components/includes/Header";
// import Footer from "../components/layout/Footer";

export default function MainLayout() {
  const [isDark, setIsDark] = useState(() => {
    const savedTheme = localStorage.getItem("theme");
    return savedTheme ? savedTheme === "dark" : true;
  });

  useEffect(() => {
    localStorage.setItem("theme", isDark ? "dark" : "light");
    document.documentElement.style.colorScheme = isDark ? "dark" : "light";
  }, [isDark]);

  const mainClasses = isDark
    ? "min-h-screen bg-gray-950 text-gray-100"
    : "min-h-screen bg-gray-50 text-gray-900";

  return (
    <>
      <Header isDark={isDark} onToggleTheme={() => setIsDark((prev) => !prev)} />
      <main className={mainClasses}>
        <Outlet context={{ isDark }} />
      </main>
      {/* <Footer /> */}
    </>
  );
}

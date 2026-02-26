import { Link, useOutletContext } from "react-router-dom";
import heroImage from "../assets/images/hero.avif";
import casual from "../assets/images/casual.jfif";

const features = [
  {
    title: "Premium Fabrics",
    description:
      "Soft, breathable cotton blends that stay crisp after every wash.",
  },
  {
    title: "Modern Fits",
    description: "Relaxed streetwear to tailored smart-casual styles.",
  },
  {
    title: "Fast Delivery",
    description: "Quick dispatch and easy returns for worry-free shopping.",
  },
];

const highlights = [
  { name: "Urban Essentials", note: "Minimal everyday staples" },
  { name: "Weekend Drop", note: "Bold prints and loose fits" },
  { name: "Office Edge", note: "Sharp looks for workdays" },
];

export default function Home() {
  const { isDark } = useOutletContext();
  const mutedText = isDark ? "text-gray-400" : "text-gray-600";
  const cardBg = isDark ? "bg-white/5 backdrop-blur-lg" : "bg-white";
  const borderClass = isDark ? "border-white/10" : "border-gray-200";

  return (
    <div className="w-full">
      {/* HERO SECTION */}
      <section className="relative overflow-hidden">
        <div className="absolute inset-0 bg-gradient-to-br from-indigo-600/20 via-cyan-400/10 to-emerald-400/10" />

        <div className="relative mx-auto max-w-7xl px-6 py-20 md:py-28 grid md:grid-cols-2 gap-12 items-center">
          {/* Left Content */}
          <div>
            <p className="inline-flex rounded-full bg-indigo-500/20 px-4 py-1 text-sm font-medium text-indigo-400">
              New Season Collection
            </p>

            <h1 className="mt-6 text-4xl md:text-6xl font-bold leading-tight">
              Wear Confidence.
              <br />
              <span className="text-indigo-500">Own Every Day.</span>
            </h1>

            <p className={`mt-6 text-base md:text-lg ${mutedText}`}>
              Premium shirts crafted for comfort, movement, and style. Built for
              workdays, weekends, and everything in between.
            </p>

            <div className="mt-8 flex gap-4 flex-wrap">
              <Link
                to="/shop"
                className="rounded-xl bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-500/30 transition hover:scale-105 hover:bg-indigo-500"
              >
                Shop Now
              </Link>

              <Link
                to="/about"
                className="rounded-xl border border-indigo-500 px-6 py-3 text-sm font-semibold text-indigo-500 transition hover:bg-indigo-500 hover:text-white"
              >
                Our Story
              </Link>
            </div>

            {/* Stats */}
            <div
              className={`mt-10 grid grid-cols-3 gap-6 border-t pt-8 ${borderClass}`}
            >
              <div>
                <p className={`text-sm ${mutedText}`}>Orders This Week</p>
                <p className="mt-2 text-3xl font-bold">1.2k+</p>
              </div>
              <div>
                <p className={`text-sm ${mutedText}`}>Happy Customers</p>
                <p className="mt-2 text-3xl font-bold">24k+</p>
              </div>
              <div>
                <p className={`text-sm ${mutedText}`}>Best Seller</p>
                <p className="mt-2 text-xl font-semibold">Classic Oxford Fit</p>
              </div>
            </div>
          </div>

          {/* Right Image */}
          <div className="relative">
            <img
              src={heroImage}
              alt="Shirt Collection"
              className="rounded-3xl shadow-2xl object-cover w-full h-[450px]"
            />
            <div className="absolute -bottom-6 -left-6 bg-indigo-600 text-white px-6 py-3 rounded-xl shadow-lg">
              New Drop 2026
            </div>
          </div>
        </div>
      </section>

      {/* FEATURES */}
      <section className="mx-auto max-w-7xl px-6 py-20">
        <div className="grid md:grid-cols-3 gap-8">
          {features.map((feature) => (
            <article
              key={feature.title}
              className={`${cardBg} p-8 rounded-2xl shadow-lg border ${borderClass} transition hover:scale-105`}
            >
              <h2 className="text-xl font-semibold">{feature.title}</h2>
              <p className={`mt-4 text-sm ${mutedText}`}>
                {feature.description}
              </p>
            </article>
          ))}
        </div>
      </section>

      {/* FEATURED COLLECTIONS */}
      <section className="mx-auto max-w-7xl px-6 pb-20">
        <div className="flex justify-between items-center mb-8">
          <h2 className="text-3xl font-bold">Featured Collections</h2>
          <Link
            to="/shop"
            className="text-sm font-semibold text-indigo-500 hover:underline"
          >
            View all
          </Link>
        </div>

        <div className="grid md:grid-cols-3 gap-6">
          {highlights.map((item) => (
            <div
              key={item.name}
              className="relative group overflow-hidden rounded-2xl shadow-lg"
            >
              <img
                src={casual}
                alt={item.name}
                className="w-full h-64 object-cover transition duration-500 group-hover:scale-110"
              />

              <div className="absolute inset-0 bg-black/40 flex flex-col justify-end p-6 text-white">
                <h3 className="text-lg font-semibold">{item.name}</h3>
                <p className="text-sm opacity-80">{item.note}</p>
              </div>
            </div>
          ))}
        </div>
      </section>
    </div>
  );
}

import { useOutletContext } from "react-router-dom";

const categories = ["All", "Casual", "Formal", "Oversized", "Polo", "Limited"];
const products = [
  { name: "Midnight Overshirt", price: "$49", oldPrice: "$69", tag: "Best Seller" },
  { name: "Ivory Oxford", price: "$39", oldPrice: "$54", tag: "New" },
  { name: "Olive Street Fit", price: "$44", oldPrice: "$62", tag: "Hot" },
  { name: "Skyline Linen", price: "$42", oldPrice: "$58", tag: "Popular" },
  { name: "Graphite Polo", price: "$36", oldPrice: "$50", tag: "Fresh" },
  { name: "Rust Relaxed Tee", price: "$29", oldPrice: "$39", tag: "Deal" },
];

export default function Shop() {
  const { isDark } = useOutletContext();
  const panelClass = isDark
    ? "rounded-2xl border border-white/10 bg-white/5"
    : "rounded-2xl border border-gray-200 bg-white";

  return (
    <div className="mx-auto flex w-full max-w-7xl flex-col gap-6 px-6 py-10 md:py-14">
      <section className={`${panelClass} p-6`}>
        <div className="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
          <div>
            <p className="text-sm text-indigo-400">Shop Collection</p>
            <h1 className="text-3xl font-bold md:text-4xl">Find Your Signature Shirt</h1>
          </div>
          <div className="flex flex-wrap gap-2">
            {categories.map((category, index) => (
              <button
                key={category}
                type="button"
                className={`rounded-full px-4 py-2 text-sm font-medium transition ${
                  index === 0
                    ? "bg-indigo-500 text-white"
                    : "border border-current/20 hover:border-indigo-400 hover:text-indigo-400"
                }`}
              >
                {category}
              </button>
            ))}
          </div>
        </div>
      </section>

      <section className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        {products.map((product) => (
          <article key={product.name} className={`${panelClass} overflow-hidden`}>
            <div className="h-48 bg-gradient-to-br from-indigo-500/35 via-cyan-500/20 to-emerald-400/20 p-4">
              <span className="inline-flex rounded-full bg-black/25 px-3 py-1 text-xs font-semibold text-white">
                {product.tag}
              </span>
            </div>
            <div className="p-5">
              <h2 className="text-lg font-semibold">{product.name}</h2>
              <div className="mt-3 flex items-center gap-2">
                <p className="text-xl font-bold">{product.price}</p>
                <p className="text-sm text-gray-400 line-through">{product.oldPrice}</p>
              </div>
              <div className="mt-5 flex gap-2">
                <button
                  type="button"
                  className="w-full rounded-lg bg-indigo-500 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-400"
                >
                  Add to Cart
                </button>
                <button
                  type="button"
                  className="rounded-lg border border-current/20 px-4 py-2 text-sm font-semibold transition hover:border-indigo-400 hover:text-indigo-400"
                >
                  Save
                </button>
              </div>
            </div>
          </article>
        ))}
      </section>
    </div>
  );
}

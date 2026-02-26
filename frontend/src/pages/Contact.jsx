import { useOutletContext } from "react-router-dom";

export default function Contact() {
  const { isDark } = useOutletContext();
  const panelClass = isDark
    ? "rounded-2xl border border-white/10 bg-white/5"
    : "rounded-2xl border border-gray-200 bg-white";
  const inputClass = isDark
    ? "w-full rounded-xl border border-white/15 bg-black/20 px-4 py-3 text-sm outline-none transition focus:border-indigo-400"
    : "w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-indigo-400";

  return (
    <div className="mx-auto flex w-full max-w-7xl flex-col gap-6 px-6 py-10 md:py-14">
      <section className={`${panelClass} p-6 md:p-8`}>
        <p className="text-sm font-semibold uppercase tracking-wide text-indigo-400">Contact</p>
        <h1 className="mt-2 text-3xl font-bold md:text-4xl">We Would Love to Hear from You</h1>
        <p className="mt-3 max-w-2xl text-gray-400">
          Have a question about sizing, orders, or partnerships? Send us a message and our team will get
          back to you shortly.
        </p>
      </section>

      <section className="grid gap-4 md:grid-cols-3">
        <article className={`${panelClass} p-5`}>
          <p className="text-sm text-indigo-400">Email</p>
          <p className="mt-2 font-semibold">support@shirtsstore.com</p>
        </article>
        <article className={`${panelClass} p-5`}>
          <p className="text-sm text-indigo-400">Phone</p>
          <p className="mt-2 font-semibold">+1 (555) 128-9900</p>
        </article>
        <article className={`${panelClass} p-5`}>
          <p className="text-sm text-indigo-400">Address</p>
          <p className="mt-2 font-semibold">24 Market Street, New York, NY</p>
        </article>
      </section>

      <section className={`${panelClass} p-6 md:p-8`}>
        <form className="grid gap-4 md:grid-cols-2">
          <div>
            <label htmlFor="name" className="mb-2 block text-sm font-medium">
              Full Name
            </label>
            <input id="name" name="name" type="text" className={inputClass} placeholder="John Doe" />
          </div>
          <div>
            <label htmlFor="email" className="mb-2 block text-sm font-medium">
              Email Address
            </label>
            <input
              id="email"
              name="email"
              type="email"
              className={inputClass}
              placeholder="john@example.com"
            />
          </div>
          <div className="md:col-span-2">
            <label htmlFor="subject" className="mb-2 block text-sm font-medium">
              Subject
            </label>
            <input
              id="subject"
              name="subject"
              type="text"
              className={inputClass}
              placeholder="How can we help?"
            />
          </div>
          <div className="md:col-span-2">
            <label htmlFor="message" className="mb-2 block text-sm font-medium">
              Message
            </label>
            <textarea
              id="message"
              name="message"
              rows={6}
              className={inputClass}
              placeholder="Write your message..."
            />
          </div>
          <div className="md:col-span-2">
            <button
              type="submit"
              className="rounded-xl bg-indigo-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-indigo-400"
            >
              Send Message
            </button>
          </div>
        </form>
      </section>
    </div>
  );
}

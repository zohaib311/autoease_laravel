import { useOutletContext } from "react-router-dom";

const values = [
  {
    title: "Design with Purpose",
    text: "Every piece is crafted to balance clean aesthetics with all-day wearability.",
  },
  {
    title: "Quality First",
    text: "We choose fabrics and finishes that look better over time, not worse.",
  },
  {
    title: "Fair Production",
    text: "We work with ethical manufacturing partners committed to better standards.",
  },
];

const team = [
  { name: "Ayaan Malik", role: "Creative Director" },
  { name: "Noah Carter", role: "Head of Product" },
  { name: "Mina Shah", role: "Operations Lead" },
];

export default function About() {
  const { isDark } = useOutletContext();
  const panelClass = isDark
    ? "rounded-2xl border border-white/10 bg-white/5"
    : "rounded-2xl border border-gray-200 bg-white";

  return (
    <div className="mx-auto flex w-full max-w-7xl flex-col gap-6 px-6 py-10 md:py-14">
      <section className={`${panelClass} p-6 md:p-10`}>
        <p className="text-sm font-semibold uppercase tracking-wide text-indigo-400">About Us</p>
        <h1 className="mt-2 text-3xl font-bold md:text-4xl">Built for People Who Care How They Show Up</h1>
        <p className="mt-4 max-w-3xl text-gray-400">
          Shirts Store started with one goal: make premium shirts that feel effortless to wear and easy
          to style. We blend modern tailoring with everyday comfort, so your wardrobe works harder with
          fewer pieces.
        </p>
      </section>

      <section className="grid gap-4 md:grid-cols-3">
        {values.map((value) => (
          <article key={value.title} className={`${panelClass} p-6`}>
            <h2 className="text-lg font-semibold">{value.title}</h2>
            <p className="mt-3 text-sm text-gray-400">{value.text}</p>
          </article>
        ))}
      </section>

      <section className={`${panelClass} p-6 md:p-8`}>
        <h2 className="text-2xl font-bold">Our Journey</h2>
        <div className="mt-6 grid gap-4 md:grid-cols-3">
          <div className="rounded-xl border border-current/10 p-4">
            <p className="text-sm text-indigo-400">2021</p>
            <p className="mt-2 font-semibold">First Studio Launch</p>
            <p className="mt-1 text-sm text-gray-400">Started with a focused line of 8 core shirt designs.</p>
          </div>
          <div className="rounded-xl border border-current/10 p-4">
            <p className="text-sm text-indigo-400">2023</p>
            <p className="mt-2 font-semibold">Expanded Nationwide</p>
            <p className="mt-1 text-sm text-gray-400">Scaled shipping and quality control across all regions.</p>
          </div>
          <div className="rounded-xl border border-current/10 p-4">
            <p className="text-sm text-indigo-400">2025</p>
            <p className="mt-2 font-semibold">Sustainable Upgrade</p>
            <p className="mt-1 text-sm text-gray-400">Moved key collections to low-impact fabric sourcing.</p>
          </div>
        </div>
      </section>

      <section className={`${panelClass} p-6 md:p-8`}>
        <h2 className="text-2xl font-bold">Meet the Team</h2>
        <div className="mt-5 grid gap-4 sm:grid-cols-2 md:grid-cols-3">
          {team.map((person) => (
            <article key={person.name} className="rounded-xl border border-current/10 p-4">
              <div className="mb-3 h-12 w-12 rounded-full bg-gradient-to-br from-indigo-500 to-cyan-400" />
              <h3 className="font-semibold">{person.name}</h3>
              <p className="text-sm text-gray-400">{person.role}</p>
            </article>
          ))}
        </div>
      </section>
    </div>
  );
}

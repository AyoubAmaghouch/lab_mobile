
---
name: marp-lab-presentation
description: Use when generating, adapting, or formatting any lab deliverable or technical assignment into a standardized Marp presentation.
---

# Marp Lab Presentation Skill

## Overview

Adapt and compile any completed technical task, lab deliverable, or technical assignment into a modern, standardized Marp presentation (`lab-<topic>.md`).

This skill enforces visual consistency, technical precision, and a fixed five-slide architecture without unnecessary metadata.

---

## When to Use

Use this skill when:
- Creating a final presentation for a lab, workshop, or technical assignment.
- Transforming code examples, debugging logs, or notes into a slide deck.
- Standardizing presentation deliverables across different technical modules.

Do NOT use for:
- Writing internal task specifications (use `task-structuring` instead).
- Writing standalone multi-file documentation.
- Creating presentations unrelated to technical assignments.

---

## Mandatory Slide Architecture

Every presentation must be output as a single file named `lab-<topic>.md`, with `marp: true`, and follow this sequence.

### Slide 1: Title (Lab Name Only)

- **Content:** The title or topic of the lab only.
- **STRICT PROHIBITION:** Never include author names, student IDs, organization names, dates, or decorative subtitles unless explicitly instructed.

### Slide 2: Lab Plan

The agenda must follow this exact format:

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

### Slide 3: Introduction

- Briefly describe the purpose, technical scope, and objectives of the lab.
- List the key technologies, concepts, tools, and syntax used.

### Slide 4: Problems Encountered

- Document real technical challenges, error messages, syntax pitfalls, or configuration issues.
- Explain the cause only when supported by available evidence.
- If no incidents occurred, explicitly state: *"No blocking technical problems encountered during implementation."*
- Never invent problems to fill the slide.

### Slide 5: Solutions Implemented

- Document concrete solutions, code fixes, and engineering best practices.
- Explain how the solutions address the problems identified in Slide 4.
- Include verification evidence when available.
- Never claim a test succeeded without evidence.

### Subsequent Slides: Practical Examples & Implementation

- Include complete, runnable code blocks whenever the available information permits.
- Declare the language on every code fence (`html`, `javascript`, `bash`, `php`, `json`, `sql`, etc.).
- Include Markdown tables with explicit column alignments (`:---`, `:---:`, `---:`).
- Integrate all exercises, diagrams, commands, and explanations directly into the slides.
- Split long code examples across multiple slides when necessary.
- Do NOT create external companion `.md` files or separate exercise files.

---

## Design & Formatting Standards

### 1. Frontmatter Configuration

Always start the presentation with this configuration:

```yaml
---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  @import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700&family=Fira+Code:wght@400;500&display=swap');

  section {
    background-color: #0f172a;
    color: #f8fafc;
    font-family: 'Inter', system-ui, sans-serif;
    padding: 40px 60px;
  }

  h1, h2, h3 {
    font-family: 'Anton', 'Impact', sans-serif;
    color: #38bdf8;
    letter-spacing: 0.5px;
  }

  section.light {
    background-color: #f8fafc;
    color: #0f172a;
  }

  section.light h1,
  section.light h2,
  section.light h3 {
    color: #0284c7;
  }

  pre, code {
    background-color: #1e293b;
    color: #e2e8f0;
    border-radius: 6px;
    font-family: 'Fira Code', 'Consolas', monospace;
  }

  section.light pre,
  section.light code {
    background-color: #e2e8f0;
    color: #0f172a;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  th {
    background-color: #0284c7;
    color: #ffffff;
    padding: 10px;
  }

  td {
    padding: 8px;
    border-bottom: 1px solid #334155;
  }

  section.light td {
    border-bottom: 1px solid #cbd5e1;
  }
---
```

### 2. Slide Delimiters

- Always use `---` on a separate line to separate slides.
- Keep the YAML frontmatter at the beginning of the file.
- Never omit a separator between slides.

### 3. Alternating Visual Rhythm

- Alternate between dark background slides and light background slides when appropriate.
- Use `<!-- _class: light -->` immediately after the slide separator to apply the light style.
- Maintain a consistent visual identity throughout the presentation.
- Prioritize readability and technical clarity over decoration.

### 4. Code & Syntax Declaration

- Always specify the language tag on every code fence.
- Never use unlabelled code blocks.
- Preserve the original code's logic and functionality.
- Include complete runnable examples whenever possible.
- Explain any necessary modifications to the original implementation.

---

## Output Template (`lab-<topic>.md`)

The generated presentation must follow this structure:

```markdown
---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #0f172a;
    color: #f8fafc;
    font-family: 'Inter', system-ui, sans-serif;
    padding: 40px 60px;
  }
  h1, h2, h3 {
    font-family: 'Anton', 'Impact', sans-serif;
    color: #38bdf8;
  }
  section.light {
    background-color: #f8fafc;
    color: #0f172a;
  }
  section.light h1, section.light h2, section.light h3 {
    color: #0284c7;
  }
---

# [Lab Title Only]

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Purpose & Scope:** Concise description of the objectives.
- **Technologies & Key Concepts:**
  - Tool or concept 1
  - Tool or concept 2

---

<!-- _class: light -->

## 2. Problems Encountered

- **Technical Issue 1:** Actual problem and available error message.
- **Technical Issue 2:** Confirmed syntax or configuration issue.

---

## 3. Solutions Implemented

- **Solution 1:** Corrective action and explanation.
- **Solution 2:** Configuration adjustment or code fix.

---

<!-- _class: light -->

## Practical Implementation: [Exercise Name]

```javascript
function calculateTotal(items) {
  return items.reduce((sum, item) => sum + item.price, 0);
}
```

---

## Summary & Verification Matrix

| Objective | Status | Verification Evidence |
|:---|:---:|:---|
| Setup & Configuration | Pending verification | Environment inspection |
| Problem Resolution | Pending verification | Relevant test results |
| Marp Deliverable | Pending verification | Generated Markdown file |
```

---

## Red Flags & Anti-Patterns

| Forbidden Practice | Reason | Mandatory Rule |
|:---|:---|:---|
| Adding names or IDs to Slide 1 | Breaks presentation consistency | Slide 1 = Lab title only |
| Changing the first five slides | Breaks the standard architecture | Title > Plan > Introduction > Problems > Solutions |
| Creating external Markdown files | Scatters the deliverable | Keep everything in one presentation |
| Omitting syntax highlighting | Makes code harder to read | Declare the language on every code fence |
| Inventing technical problems | Reduces technical reliability | Document only real, supported problems |
| Claiming unverified tests passed | Misrepresents the results | Report actual verification evidence |

---

## Testing Protocol

Test the skill independently using **Antigravity** and **GitHub Copilot in VS Code**.

Use the same technical assignment in both environments.

### Test 1: Standard Technical Lab

Provide a completed technical assignment with its objectives, implementation steps, and code.

Expected result: a presentation with the mandatory five-slide opening and relevant practical examples.

### Test 2: Debugging Lab

Provide a real error, the relevant source code, and the confirmed correction.

Expected result: an accurate explanation of the problem, its solution, and the available verification evidence.

### Test 3: Incomplete Information

Provide an assignment with missing details or unverified test results.

Expected result: the skill identifies missing information without inventing facts or claiming successful validation.

### Evaluation Matrix

| Criterion | Expected Result |
|:---|:---|
| Structure | Correct order of the first five slides |
| Technical accuracy | No fabricated problems or solutions |
| Code quality | Correct and relevant code examples |
| Visual consistency | Consistent dark navy and cyan design |
| Marp compatibility | Valid Markdown and YAML frontmatter |
| Reusability | Adaptable to different technical assignments |

---

## Final Deliverable

Generate one self-contained file named `lab-<topic>.md`.

The presentation must be technically accurate, visually consistent, readable, and ready for Marp preview and export.
```

<?php
/**
 * Showcase-блок для внешнего Java-проекта.
 *
 * Здесь мы не запускаем Java-код, а красиво объясняем:
 * 1. какую задачу решает программа
 * 2. как идет поток обработки данных
 * 3. какие ключевые участки кода важны
 */
?>
<section class="panel showcase-panel">
    <?php
    use App\Core\View;

    View::partial('panel-header', [
        'eyebrowKey' => 'java_showcase.eyebrow',
        'titleKey' => 'java_showcase.title',
        'descriptionKey' => 'java_showcase.description',
    ]);
    ?>

    <div class="showcase-meta">
        <span class="tag tag-warm showcase-tag"><?= htmlspecialchars(__('java_showcase.badge.language'), ENT_QUOTES, 'UTF-8') ?></span>
        <span class="tag showcase-tag showcase-tag-topic"><?= htmlspecialchars(__('java_showcase.badge.topic'), ENT_QUOTES, 'UTF-8') ?></span>
        <a class="showcase-link" href="https://github.com/k8agura/HomeWork1" target="_blank" rel="noopener noreferrer">
            <?= htmlspecialchars(__('java_showcase.repo_link'), ENT_QUOTES, 'UTF-8') ?>
        </a>
    </div>

    <!-- CSS-only вкладки: переключаются через radio без отдельного JavaScript -->
    <div class="showcase-tabs">
        <input class="showcase-tab-input" type="radio" name="java-tab" id="java-tab-overview" checked>
        <input class="showcase-tab-input" type="radio" name="java-tab" id="java-tab-structure">
        <input class="showcase-tab-input" type="radio" name="java-tab" id="java-tab-functions">
        <input class="showcase-tab-input" type="radio" name="java-tab" id="java-tab-data">
        <input class="showcase-tab-input" type="radio" name="java-tab" id="java-tab-flow">
        <input class="showcase-tab-input" type="radio" name="java-tab" id="java-tab-code">

        <div class="showcase-tab-labels">
            <label for="java-tab-overview"><?= htmlspecialchars(__('java_showcase.tabs.overview'), ENT_QUOTES, 'UTF-8') ?></label>
            <label for="java-tab-structure"><?= htmlspecialchars(__('java_showcase.tabs.structure'), ENT_QUOTES, 'UTF-8') ?></label>
            <label for="java-tab-functions"><?= htmlspecialchars(__('java_showcase.tabs.functions'), ENT_QUOTES, 'UTF-8') ?></label>
            <label for="java-tab-data"><?= htmlspecialchars(__('java_showcase.tabs.data'), ENT_QUOTES, 'UTF-8') ?></label>
            <label for="java-tab-flow"><?= htmlspecialchars(__('java_showcase.tabs.flow'), ENT_QUOTES, 'UTF-8') ?></label>
            <label for="java-tab-code"><?= htmlspecialchars(__('java_showcase.tabs.code'), ENT_QUOTES, 'UTF-8') ?></label>
        </div>

        <div class="showcase-tab-panels">
            <div class="showcase-tab-panel showcase-overview-panel">
                <div class="showcase-grid">
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.overview.problem.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.overview.problem.text'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.overview.input.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.overview.input.text'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.overview.output.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.overview.output.text'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.overview.validation.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.overview.validation.text'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                </div>
            </div>

            <div class="showcase-tab-panel showcase-structure-panel">
                <div class="showcase-two-column">
                    <div class="code-window">
                        <div class="code-window-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <strong>HomeWork1 / tree</strong>
                        </div>
                        <pre class="code-block"><code>HomeWork1/
├─ src/
│  └─ App.java
├─ bin/
│  ├─ App.class
│  ├─ App$Student.class
│  ├─ App$AnalysisResult.class
│  └─ App$SubjectStats.class
├─ HomeWork1.jar
├─ README.md
├─ отчет.txt
├─ .idea/
└─ .vscode/</code></pre>
                    </div>

                    <div class="showcase-grid">
                        <article class="card">
                            <h2><?= htmlspecialchars(__('java_showcase.structure.src.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                            <p><?= htmlspecialchars(__('java_showcase.structure.src.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        </article>
                        <article class="card">
                            <h2><?= htmlspecialchars(__('java_showcase.structure.bin.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                            <p><?= htmlspecialchars(__('java_showcase.structure.bin.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        </article>
                        <article class="card">
                            <h2><?= htmlspecialchars(__('java_showcase.structure.jar.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                            <p><?= htmlspecialchars(__('java_showcase.structure.jar.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        </article>
                        <article class="card">
                            <h2><?= htmlspecialchars(__('java_showcase.structure.idea.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                            <p><?= htmlspecialchars(__('java_showcase.structure.idea.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        </article>
                    </div>
                </div>
            </div>

            <div class="showcase-tab-panel showcase-functions-panel">
                <div class="function-list">
                    <article class="card">
                        <h2><code>main()</code></h2>
                        <p><?= htmlspecialchars(__('java_showcase.functions.main'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><code>readFolderPath()</code></h2>
                        <p><?= htmlspecialchars(__('java_showcase.functions.readFolderPath'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><code>analyzeFolder()</code></h2>
                        <p><?= htmlspecialchars(__('java_showcase.functions.analyzeFolder'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><code>processFile()</code></h2>
                        <p><?= htmlspecialchars(__('java_showcase.functions.processFile'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><code>parseStudentFile()</code></h2>
                        <p><?= htmlspecialchars(__('java_showcase.functions.parseStudentFile'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><code>readLines()</code></h2>
                        <p><?= htmlspecialchars(__('java_showcase.functions.readLines'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><code>buildReport()</code></h2>
                        <p><?= htmlspecialchars(__('java_showcase.functions.buildReport'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><code>studentsWithAverage()</code></h2>
                        <p><?= htmlspecialchars(__('java_showcase.functions.studentsWithAverage'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><code>appendStudents()</code> / <code>appendInvalidFiles()</code></h2>
                        <p><?= htmlspecialchars(__('java_showcase.functions.appendHelpers'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><code>rewriteFile()</code> / <code>format2()</code></h2>
                        <p><?= htmlspecialchars(__('java_showcase.functions.ioHelpers'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                </div>
            </div>

            <div class="showcase-tab-panel showcase-data-panel">
                <div class="showcase-grid">
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.data.collections.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.data.collections.text'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.data.array_note.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.data.array_note.text'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.data.loop_files.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.data.loop_files.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        <pre class="mini-code"><code><span class="code-keyword">for</span> (<span class="code-type">Path</span> file : files) {
    <span class="code-keyword">if</span> (isReportFile(file)) {
        <span class="code-keyword">continue</span>;
    }
    <span class="code-method">processFile</span>(file, students, subjectStats, invalidFiles);
}</code></pre>
                    </article>
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.data.loop_grades.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.data.loop_grades.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        <pre class="mini-code"><code><span class="code-keyword">for</span> (<span class="code-type">Map.Entry</span>&lt;<span class="code-type">String</span>, <span class="code-type">Integer</span>&gt; grade :
        student.subjectGrades.entrySet()) {
    subjectStats
        .<span class="code-method">computeIfAbsent</span>(grade.getKey(), k -&gt; <span class="code-keyword">new</span> <span class="code-type">SubjectStats</span>())
        .<span class="code-method">add</span>(grade.getValue());
}</code></pre>
                    </article>
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.data.map_store.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.data.map_store.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        <pre class="mini-code"><code>grades.<span class="code-method">put</span>(subject, <span class="code-type">Integer</span>.<span class="code-method">parseInt</span>(matcher.group(<span class="code-number">2</span>)));</code></pre>
                    </article>
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.data.streams.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.data.streams.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        <pre class="mini-code"><code><span class="code-keyword">double</span> average = grades.values().stream()
    .<span class="code-method">mapToInt</span>(<span class="code-type">Integer</span>::intValue)
    .<span class="code-method">average</span>()
    .<span class="code-method">orElse</span>(<span class="code-number">0.0</span>);</code></pre>
                    </article>
                </div>
            </div>

            <div class="showcase-tab-panel showcase-flow-panel">
                <div class="call-chain">
                    <div class="call-chain-node"><code>main()</code></div>
                    <div class="call-chain-arrow">→</div>
                    <div class="call-chain-node"><code>analyzeFolder()</code></div>
                    <div class="call-chain-arrow">→</div>
                    <div class="call-chain-node"><code>processFile()</code></div>
                    <div class="call-chain-arrow">→</div>
                    <div class="call-chain-node"><code>parseStudentFile()</code></div>
                    <div class="call-chain-arrow">→</div>
                    <div class="call-chain-node"><code>buildReport()</code></div>
                </div>

                <div class="flow-steps">
                    <article class="flow-step">
                        <span class="flow-step-number">01</span>
                        <div>
                            <h2><?= htmlspecialchars(__('java_showcase.flow.step1.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                            <p><?= htmlspecialchars(__('java_showcase.flow.step1.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    </article>
                    <article class="flow-step">
                        <span class="flow-step-number">02</span>
                        <div>
                            <h2><?= htmlspecialchars(__('java_showcase.flow.step2.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                            <p><?= htmlspecialchars(__('java_showcase.flow.step2.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    </article>
                    <article class="flow-step">
                        <span class="flow-step-number">03</span>
                        <div>
                            <h2><?= htmlspecialchars(__('java_showcase.flow.step3.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                            <p><?= htmlspecialchars(__('java_showcase.flow.step3.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    </article>
                    <article class="flow-step">
                        <span class="flow-step-number">04</span>
                        <div>
                            <h2><?= htmlspecialchars(__('java_showcase.flow.step4.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                            <p><?= htmlspecialchars(__('java_showcase.flow.step4.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    </article>
                    <article class="flow-step">
                        <span class="flow-step-number">05</span>
                        <div>
                            <h2><?= htmlspecialchars(__('java_showcase.flow.step5.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                            <p><?= htmlspecialchars(__('java_showcase.flow.step5.text'), ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    </article>
                </div>
            </div>

            <div class="showcase-tab-panel showcase-code-panel">
                <div class="code-legend">
                    <span><i class="legend-dot legend-comment"></i><?= htmlspecialchars(__('java_showcase.code.legend.comment'), ENT_QUOTES, 'UTF-8') ?></span>
                    <span><i class="legend-dot legend-keyword"></i><?= htmlspecialchars(__('java_showcase.code.legend.keyword'), ENT_QUOTES, 'UTF-8') ?></span>
                    <span><i class="legend-dot legend-string"></i><?= htmlspecialchars(__('java_showcase.code.legend.string'), ENT_QUOTES, 'UTF-8') ?></span>
                    <span><i class="legend-dot legend-type"></i><?= htmlspecialchars(__('java_showcase.code.legend.type'), ENT_QUOTES, 'UTF-8') ?></span>
                </div>

                <div class="code-window">
                    <div class="code-window-bar">
                        <span></span>
                        <span></span>
                        <span></span>
                        <strong>App.java</strong>
                    </div>
                    <ol class="code-list">
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.io.IOException</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.nio.charset.Charset</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.nio.charset.StandardCharsets</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.nio.file.DirectoryStream</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.nio.file.Files</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.nio.file.Path</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.nio.file.Paths</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.nio.file.StandardOpenOption</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.util.ArrayList</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.util.Comparator</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.util.LinkedHashMap</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.util.List</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.util.Locale</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.util.Map</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.util.Scanner</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.util.regex.Matcher</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.util.regex.Pattern</span>;</code></li>
                        <li><code><span class="code-keyword">import</span> <span class="code-type">java.util.stream.Collectors</span>;</code></li>
                        <li><code></code></li>
                        <li><code><span class="code-keyword">public class</span> <span class="code-type">App</span> {</code></li>
                        <li><code>    <span class="code-comment">// Регулярное выражение проверяет, что имя файла похоже на полное ФИО ученика</span></code></li>
                        <li><code>    <span class="code-keyword">private static final</span> <span class="code-type">Pattern</span> FIO_PATTERN = Pattern.compile(</code></li>
                        <li><code>            <span class="code-string">"^[\\p{L}]+(?:-[\\p{L}]+)?\\s+[\\p{L}]+(?:-[\\p{L}]+)?\\s+[\\p{L}]+(?:-[\\p{L}]+)?$"</span></code></li>
                        <li><code>    );</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Это выражение ловит строки формата "предмет - оценка"</span></code></li>
                        <li><code>    <span class="code-keyword">private static final</span> <span class="code-type">Pattern</span> SUBJECT_GRADE_PATTERN =</code></li>
                        <li><code>            Pattern.compile(<span class="code-string">"^(.+?)\\s*[-\\u2013\\u2014]\\s*([1-5])\\s*$"</span>);</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Основная и запасная кодировки для чтения файлов</span></code></li>
                        <li><code>    <span class="code-keyword">private static final</span> <span class="code-type">Charset</span> UTF8 = StandardCharsets.UTF_8;</code></li>
                        <li><code>    <span class="code-keyword">private static final</span> <span class="code-type">Charset</span> CP1251 = Charset.forName(<span class="code-string">"windows-1251"</span>);</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Константы программы: имя отчета, минимум предметов и точность сравнения double</span></code></li>
                        <li><code>    <span class="code-keyword">private static final</span> <span class="code-type">String</span> REPORT_FILE = <span class="code-string">"отчет.txt"</span>;</code></li>
                        <li><code>    <span class="code-keyword">private static final int</span> MIN_SUBJECTS = <span class="code-number">5</span>;</code></li>
                        <li><code>    <span class="code-keyword">private static final double</span> EPS = <span class="code-number">1e-9</span>;</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Точка входа: координирует весь сценарий выполнения программы</span></code></li>
                        <li class="code-focus"><code>    <span class="code-keyword">public static void</span> <span class="code-method">main</span>(String[] args) {</code></li>
                        <li><code>        <span class="code-type">Path</span> folder = <span class="code-method">readFolderPath</span>();</code></li>
                        <li><code>        <span class="code-keyword">if</span> (folder == <span class="code-keyword">null</span>) {</code></li>
                        <li><code>            <span class="code-keyword">return</span>;</code></li>
                        <li><code>        }</code></li>
                        <li><code></code></li>
                        <li><code>        <span class="code-comment">// Если путь валиден, подготавливаем файл будущего отчета</span></code></li>
                        <li><code>        <span class="code-type">Path</span> reportPath = folder.resolve(REPORT_FILE);</code></li>
                        <li><code>        <span class="code-keyword">if</span> (!<span class="code-method">rewriteFile</span>(reportPath, <span class="code-string">""</span>, <span class="code-string">"Не удалось подготовить файл отчета"</span>)) {</code></li>
                        <li><code>            <span class="code-keyword">return</span>;</code></li>
                        <li><code>        }</code></li>
                        <li><code></code></li>
                        <li><code>        <span class="code-comment">// Запускаем анализ папки и потом строим финальный текст отчета</span></code></li>
                        <li><code>        <span class="code-type">AnalysisResult</span> result = <span class="code-method">analyzeFolder</span>(folder);</code></li>
                        <li><code>        <span class="code-type">String</span> report = <span class="code-method">buildReport</span>(result);</code></li>
                        <li><code></code></li>
                        <li><code>        System.out.println();</code></li>
                        <li><code>        System.out.println(report);</code></li>
                        <li><code>        <span class="code-method">rewriteFile</span>(reportPath, report, <span class="code-string">"Ошибка записи отчета"</span>);</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Читает путь из консоли и проверяет, что это папка</span></code></li>
                        <li><code>    <span class="code-keyword">private static</span> <span class="code-type">Path</span> <span class="code-method">readFolderPath</span>() {</code></li>
                        <li><code>        <span class="code-type">Scanner</span> scanner = <span class="code-keyword">new</span> Scanner(System.in, UTF8);</code></li>
                        <li><code>        System.out.print(<span class="code-string">"Введите путь к папке с файлами учеников: "</span>);</code></li>
                        <li><code></code></li>
                        <li><code>        <span class="code-type">Path</span> folder = Paths.get(scanner.nextLine().trim());</code></li>
                        <li><code>        <span class="code-keyword">if</span> (!Files.isDirectory(folder)) {</code></li>
                        <li><code>            System.out.println(<span class="code-string">"Ошибка: указанного каталога не существует или это не папка."</span>);</code></li>
                        <li><code>            <span class="code-keyword">return null</span>;</code></li>
                        <li><code>        }</code></li>
                        <li><code>        <span class="code-keyword">return</span> folder;</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Обходит все txt-файлы в папке и собирает общую статистику</span></code></li>
                        <li class="code-focus"><code>    <span class="code-keyword">private static</span> <span class="code-type">AnalysisResult</span> <span class="code-method">analyzeFolder</span>(Path folder) {</code></li>
                        <li><code>        List&lt;Student&gt; students = new ArrayList&lt;&gt;();</code></li>
                        <li><code>        Map&lt;String, SubjectStats&gt; subjectStats = new LinkedHashMap&lt;&gt;();</code></li>
                        <li><code>        List&lt;String&gt; invalidFiles = new ArrayList&lt;&gt;();</code></li>
                        <li><code></code></li>
                        <li><code>        <span class="code-keyword">try</span> (DirectoryStream&lt;Path&gt; files = Files.newDirectoryStream(folder, <span class="code-string">"*.txt"</span>)) {</code></li>
                        <li><code>            <span class="code-comment">// Цикл проходит по всем txt-файлам каталога</span></code></li>
                        <li><code>            <span class="code-keyword">for</span> (Path file : files) {</code></li>
                        <li><code>                <span class="code-comment">// Сам отчет повторно не анализируем</span></code></li>
                        <li><code>                <span class="code-keyword">if</span> (<span class="code-method">isReportFile</span>(file)) {</code></li>
                        <li><code>                    <span class="code-keyword">continue</span>;</code></li>
                        <li><code>                }</code></li>
                        <li><code>                <span class="code-method">processFile</span>(file, students, subjectStats, invalidFiles);</code></li>
                        <li><code>            }</code></li>
                        <li><code>        } <span class="code-keyword">catch</span> (IOException e) {</code></li>
                        <li><code>            invalidFiles.add(<span class="code-string">"Ошибка обхода папки: "</span> + e.getMessage());</code></li>
                        <li><code>        }</code></li>
                        <li><code></code></li>
                        <li><code>        return new AnalysisResult(students, subjectStats, invalidFiles);</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Небольшой helper: проверяет, не является ли файл самим отчетом</span></code></li>
                        <li><code>    <span class="code-keyword">private static boolean</span> <span class="code-method">isReportFile</span>(Path file) {</code></li>
                        <li><code>        <span class="code-keyword">return</span> file.getFileName().toString().equalsIgnoreCase(REPORT_FILE);</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Обрабатывает один файл ученика: валидирует имя и разбирает содержимое</span></code></li>
                        <li class="code-focus"><code>    <span class="code-keyword">private static void</span> <span class="code-method">processFile</span>(</code></li>
                        <li><code>            Path file,</code></li>
                        <li><code>            List&lt;Student&gt; students,</code></li>
                        <li><code>            Map&lt;String, SubjectStats&gt; subjectStats,</code></li>
                        <li><code>            List&lt;String&gt; invalidFiles</code></li>
                        <li><code>    ) {</code></li>
                        <li><code>        String fileName = file.getFileName().toString();</code></li>
                        <li><code>        String fio = fileName.substring(0, fileName.length() - 4).trim();</code></li>
                        <li><code></code></li>
                        <li><code>        <span class="code-comment">// Если имя файла не похоже на ФИО, файл не обрабатывается</span></code></li>
                        <li><code>        <span class="code-keyword">if</span> (!FIO_PATTERN.matcher(fio).matches()) {</code></li>
                        <li><code>            invalidFiles.add(fileName + <span class="code-string">" -&gt; некорректное имя файла"</span>);</code></li>
                        <li><code>            <span class="code-keyword">return</span>;</code></li>
                        <li><code>        }</code></li>
                        <li><code></code></li>
                        <li><code>        <span class="code-keyword">try</span> {</code></li>
                        <li><code>            <span class="code-type">Student</span> student = <span class="code-method">parseStudentFile</span>(file, fio);</code></li>
                        <li><code>            students.add(student);</code></li>
                        <li><code></code></li>
                        <li><code>            <span class="code-comment">// Этот цикл переносит оценки ученика в общую статистику по предметам</span></code></li>
                        <li><code>            <span class="code-keyword">for</span> (Map.Entry&lt;String, Integer&gt; grade : student.subjectGrades.entrySet()) {</code></li>
                        <li><code>                subjectStats.computeIfAbsent(grade.getKey(), k -&gt; <span class="code-keyword">new</span> SubjectStats())</code></li>
                        <li><code>                        .add(grade.getValue());</code></li>
                        <li><code>            }</code></li>
                        <li><code>        } <span class="code-keyword">catch</span> (IllegalArgumentException e) {</code></li>
                        <li><code>            invalidFiles.add(fileName + " -&gt; " + e.getMessage());</code></li>
                        <li><code>        } <span class="code-keyword">catch</span> (IOException e) {</code></li>
                        <li><code>            invalidFiles.add(fileName + " -&gt; ошибка чтения: " + e.getMessage());</code></li>
                        <li><code>        }</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Разбирает один файл ученика в Map предметов и вычисляет средний балл</span></code></li>
                        <li class="code-focus"><code>    <span class="code-keyword">private static</span> <span class="code-type">Student</span> <span class="code-method">parseStudentFile</span>(Path file, String fio) <span class="code-keyword">throws</span> IOException {</code></li>
                        <li><code>        Map&lt;String, Integer&gt; grades = new LinkedHashMap&lt;&gt;();</code></li>
                        <li><code></code></li>
                        <li><code>        <span class="code-comment">// Цикл идет по всем строкам файла и проверяет каждую запись</span></code></li>
                        <li><code>        <span class="code-keyword">for</span> (String rawLine : <span class="code-method">readLines</span>(file)) {</code></li>
                        <li><code>            String line = rawLine.trim();</code></li>
                        <li><code>            <span class="code-comment">// Пустые строки игнорируем, чтобы не мешали разбору файла</span></code></li>
                        <li><code>            <span class="code-keyword">if</span> (line.isEmpty()) {</code></li>
                        <li><code>                <span class="code-keyword">continue</span>;</code></li>
                        <li><code>            }</code></li>
                        <li><code></code></li>
                        <li><code>            <span class="code-type">Matcher</span> matcher = SUBJECT_GRADE_PATTERN.matcher(line);</code></li>
                        <li><code>            <span class="code-keyword">if</span> (!matcher.matches()) {</code></li>
                        <li><code>                <span class="code-keyword">throw new</span> IllegalArgumentException(<span class="code-string">"некорректная строка"</span>);</code></li>
                        <li><code>            }</code></li>
                        <li><code></code></li>
                        <li><code>            String subject = matcher.group(1).trim();</code></li>
                        <li><code>            <span class="code-keyword">if</span> (subject.isEmpty()) {</code></li>
                        <li><code>                <span class="code-keyword">throw new</span> IllegalArgumentException(<span class="code-string">"пустое название предмета"</span>);</code></li>
                        <li><code>            }</code></li>
                        <li><code>            <span class="code-comment">// Один и тот же предмет нельзя встретить дважды у одного ученика</span></code></li>
                        <li><code>            <span class="code-keyword">if</span> (grades.containsKey(subject)) {</code></li>
                        <li><code>                <span class="code-keyword">throw new</span> IllegalArgumentException(<span class="code-string">"повтор предмета '"</span> + subject + <span class="code-string">"'"</span>);</code></li>
                        <li><code>            }</code></li>
                        <li><code></code></li>
                        <li><code>            grades.put(subject, Integer.parseInt(matcher.group(2)));</code></li>
                        <li><code>        }</code></li>
                        <li><code></code></li>
                        <li><code>        <span class="code-comment">// Дополнительная бизнес-проверка: предметов должно быть минимум пять</span></code></li>
                        <li><code>        <span class="code-keyword">if</span> (grades.size() &lt; MIN_SUBJECTS) {</code></li>
                        <li><code>            <span class="code-keyword">throw new</span> IllegalArgumentException(<span class="code-string">"предметов меньше "</span> + MIN_SUBJECTS);</code></li>
                        <li><code>        }</code></li>
                        <li><code></code></li>
                        <li><code>        <span class="code-comment">// Stream считает среднее арифметическое по всем оценкам ученика</span></code></li>
                        <li><code>        <span class="code-keyword">double</span> average = grades.values().stream()</code></li>
                        <li><code>                .mapToInt(Integer::intValue)</code></li>
                        <li><code>                .average()</code></li>
                        <li><code>                .orElse(0.0);</code></li>
                        <li><code></code></li>
                        <li><code>        <span class="code-keyword">return new</span> Student(fio, grades, average);</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Пробует прочитать файл в UTF-8, а если не вышло — в CP1251</span></code></li>
                        <li><code>    <span class="code-keyword">private static</span> List&lt;String&gt; <span class="code-method">readLines</span>(Path file) <span class="code-keyword">throws</span> IOException {</code></li>
                        <li><code>        <span class="code-keyword">try</span> {</code></li>
                        <li><code>            return Files.readAllLines(file, UTF8);</code></li>
                        <li><code>        } <span class="code-keyword">catch</span> (IOException ignored) {</code></li>
                        <li><code>            return Files.readAllLines(file, CP1251);</code></li>
                        <li><code>        }</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Собирает конечный текстовый отчет на основе всех найденных данных</span></code></li>
                        <li class="code-focus"><code>    <span class="code-keyword">private static</span> <span class="code-type">String</span> <span class="code-method">buildReport</span>(AnalysisResult result) {</code></li>
                        <li><code>        StringBuilder sb = new StringBuilder();</code></li>
                        <li><code></code></li>
                        <li><code>        sb.append("=== Анализ оценок ===\\n");</code></li>
                        <li><code>        sb.append("Количество учеников: ").append(result.students.size()).append("\\n\\n");</code></li>
                        <li><code></code></li>
                        <li><code>        <span class="code-comment">// Если валидных учеников нет, отчет завершится сразу списком ошибок</span></code></li>
                        <li><code>        <span class="code-keyword">if</span> (result.students.isEmpty()) {</code></li>
                        <li><code>            sb.append("Нет корректных файлов для анализа.\\n");</code></li>
                        <li><code>            appendInvalidFiles(sb, result.invalidFiles);</code></li>
                        <li><code>            return sb.toString();</code></li>
                        <li><code>        }</code></li>
                        <li><code></code></li>
                        <li><code>        sb.append("Средний балл по каждому предмету:\\n");</code></li>
                        <li><code>        <span class="code-comment">// Stream сортирует предметы по названию и добавляет их в отчет</span></code></li>
                        <li><code>        result.subjectStats.entrySet().stream()</code></li>
                        <li><code>                .sorted(Map.Entry.comparingByKey())</code></li>
                        <li><code>                .forEach(e -&gt; sb.append("- ")</code></li>
                        <li><code>                        .append(e.getKey())</code></li>
                        <li><code>                        .append(": ")</code></li>
                        <li><code>                        .append(format2(e.getValue().average()))</code></li>
                        <li><code>                        .append("\\n"));</code></li>
                        <li><code></code></li>
                        <li><code>        <span class="code-comment">// Отдельно находим максимальный и минимальный средний балл</span></code></li>
                        <li><code>        double bestAvg = result.students.stream().mapToDouble(s -&gt; s.average).max().orElse(0.0);</code></li>
                        <li><code>        double worstAvg = result.students.stream().mapToDouble(s -&gt; s.average).min().orElse(0.0);</code></li>
                        <li><code></code></li>
                        <li><code>        sb.append("\\n");</code></li>
                        <li><code>        appendStudents(sb, "Лучший(е) ученик(и)", studentsWithAverage(result.students, bestAvg));</code></li>
                        <li><code>        appendStudents(sb, "Худший(е) ученик(и)", studentsWithAverage(result.students, worstAvg));</code></li>
                        <li><code>        appendInvalidFiles(sb, result.invalidFiles);</code></li>
                        <li><code></code></li>
                        <li><code>        return sb.toString();</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Возвращает всех учеников с одинаковым средним баллом</span></code></li>
                        <li><code>    <span class="code-keyword">private static</span> List&lt;Student&gt; <span class="code-method">studentsWithAverage</span>(List&lt;Student&gt; students, double targetAverage) {</code></li>
                        <li><code>        return students.stream()</code></li>
                        <li><code>                .filter(s -&gt; Math.abs(s.average - targetAverage) &lt; EPS)</code></li>
                        <li><code>                .sorted(Comparator.comparing(s -&gt; s.fio))</code></li>
                        <li><code>                .collect(Collectors.toList());</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Добавляет в отчет список учеников с их средним баллом</span></code></li>
                        <li><code>    <span class="code-keyword">private static void</span> <span class="code-method">appendStudents</span>(StringBuilder sb, String title, List&lt;Student&gt; students) {</code></li>
                        <li><code>        sb.append(title).append(":\\n");</code></li>
                        <li><code>        for (Student student : students) {</code></li>
                        <li><code>            sb.append("- ").append(student.fio)</code></li>
                        <li><code>                    .append(" (средний балл: ").append(format2(student.average)).append(")\\n");</code></li>
                        <li><code>        }</code></li>
                        <li><code>        sb.append("\\n");</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Добавляет блок с некорректными файлами и причинами пропуска</span></code></li>
                        <li><code>    <span class="code-keyword">private static void</span> <span class="code-method">appendInvalidFiles</span>(StringBuilder sb, List&lt;String&gt; invalidFiles) {</code></li>
                        <li><code>        sb.append("Некорректные/пропущенные файлы: ").append(invalidFiles.size()).append("\\n");</code></li>
                        <li><code>        for (String issue : invalidFiles) {</code></li>
                        <li><code>            sb.append("- ").append(issue).append("\\n");</code></li>
                        <li><code>        }</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Полностью перезаписывает файл: используется и для очистки, и для финального отчета</span></code></li>
                        <li><code>    <span class="code-keyword">private static boolean</span> <span class="code-method">rewriteFile</span>(Path file, String content, String errorPrefix) {</code></li>
                        <li><code>        <span class="code-keyword">try</span> {</code></li>
                        <li><code>            Files.writeString(file, content, UTF8,</code></li>
                        <li><code>                    StandardOpenOption.CREATE, StandardOpenOption.TRUNCATE_EXISTING);</code></li>
                        <li><code>            if (REPORT_FILE.equalsIgnoreCase(file.getFileName().toString()) &amp;&amp; !content.isEmpty()) {</code></li>
                        <li><code>                System.out.println("Отчет записан в файл: " + file.toAbsolutePath());</code></li>
                        <li><code>            }</code></li>
                        <li><code>            return true;</code></li>
                        <li><code>        } <span class="code-keyword">catch</span> (IOException e) {</code></li>
                        <li><code>            System.out.println(errorPrefix + ": " + e.getMessage());</code></li>
                        <li><code>            return false;</code></li>
                        <li><code>        }</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Форматирует число до двух знаков после запятой</span></code></li>
                        <li><code>    <span class="code-keyword">private static</span> String <span class="code-method">format2</span>(double value) {</code></li>
                        <li><code>        <span class="code-keyword">return</span> String.format(Locale.US, <span class="code-string">"%.2f"</span>, value);</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Модель одного ученика: ФИО, предметы и средний балл</span></code></li>
                        <li><code>    <span class="code-keyword">private static final class</span> <span class="code-type">Student</span> {</code></li>
                        <li><code>        private final String fio;</code></li>
                        <li><code>        private final Map&lt;String, Integer&gt; subjectGrades;</code></li>
                        <li><code>        private final double average;</code></li>
                        <li><code></code></li>
                        <li><code>        private Student(String fio, Map&lt;String, Integer&gt; subjectGrades, double average) {</code></li>
                        <li><code>            this.fio = fio;</code></li>
                        <li><code>            this.subjectGrades = subjectGrades;</code></li>
                        <li><code>            this.average = average;</code></li>
                        <li><code>        }</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Итог анализа всей папки: список учеников, статистика и ошибки</span></code></li>
                        <li><code>    <span class="code-keyword">private static final class</span> <span class="code-type">AnalysisResult</span> {</code></li>
                        <li><code>        private final List&lt;Student&gt; students;</code></li>
                        <li><code>        private final Map&lt;String, SubjectStats&gt; subjectStats;</code></li>
                        <li><code>        private final List&lt;String&gt; invalidFiles;</code></li>
                        <li><code></code></li>
                        <li><code>        private AnalysisResult(List&lt;Student&gt; students,</code></li>
                        <li><code>                               Map&lt;String, SubjectStats&gt; subjectStats,</code></li>
                        <li><code>                               List&lt;String&gt; invalidFiles) {</code></li>
                        <li><code>            this.students = students;</code></li>
                        <li><code>            this.subjectStats = subjectStats;</code></li>
                        <li><code>            this.invalidFiles = invalidFiles;</code></li>
                        <li><code>        }</code></li>
                        <li><code>    }</code></li>
                        <li><code></code></li>
                        <li><code>    <span class="code-comment">// Накопитель статистики по одному предмету: сумма оценок и количество</span></code></li>
                        <li><code>    <span class="code-keyword">private static final class</span> <span class="code-type">SubjectStats</span> {</code></li>
                        <li><code>        private int sum;</code></li>
                        <li><code>        private int count;</code></li>
                        <li><code></code></li>
                        <li><code>        private void add(int grade) {</code></li>
                        <li><code>            sum += grade;</code></li>
                        <li><code>            count++;</code></li>
                        <li><code>        }</code></li>
                        <li><code></code></li>
                        <li><code>        private double average() {</code></li>
                        <li><code>            return count == 0 ? 0.0 : (double) sum / count;</code></li>
                        <li><code>        }</code></li>
                        <li><code>    }</code></li>
                        <li><code>}</code></li>
                    </ol>
                </div>

                <div class="code-explainer">
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.code.card1.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.code.card1.text'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.code.card2.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.code.card2.text'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.code.card3.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.code.card3.text'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                    <article class="card">
                        <h2><?= htmlspecialchars(__('java_showcase.code.card4.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars(__('java_showcase.code.card4.text'), ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
/* $Id$ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Байт', 'кБ', 'МБ', 'ГБ');

$day_of_week = array('Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
$month = array('Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y г., %H:%M';

$strAPrimaryKey = 'Был добавлен первичный ключ к %s';
$strAccessDenied = 'В доступе отказано';
$strAction = 'Действие';
$strAddDeleteColumn = 'Добавить/удалить столбец критерия';
$strAddDeleteRow = 'Добавить/удалить ряд критерия';
$strAddNewField = 'Добавить новое поле';
$strAddPriv = 'Добавить новые привилегии';
$strAddPrivMessage = 'Была добавлена новая привилегия';
$strAddSearchConditions = 'Добавить условия поиска (тело для условия "where"):';
$strAddToIndex = 'Добавить к индексу&nbsp;%s&nbsp;колоноку(и)';
$strAddUser = 'Добавить нового пользователя';
$strAddUserMessage = 'Была добавлен новый пользователь.';
$strAffectedRows = 'Затронутые ряды:';
$strAfter = 'После %s';
$strAfterInsertBack = 'Возврат';
$strAfterInsertNewInsert = 'Вставить новую запись';
$strAll = 'Все';
$strAlterOrderBy = 'Изменить порядок таблицы';
$strAnIndex = 'Был добавлен индекс для %s';
$strAnalyzeTable = 'Анализ таблицы';
$strAnd = 'И';
$strAny = 'Любой';
$strAnyColumn = 'Любая колонка';
$strAnyDatabase = 'Любая база данных';
$strAnyHost = 'Любой хост';
$strAnyTable = 'Любая таблица';
$strAnyUser = 'Любой пользователь';
$strAscending = 'Восходящий';
$strAtBeginningOfTable = 'В начало таблицы';
$strAtEndOfTable = 'В конец таблицы';
$strAttr = 'Атрибуты';

$strBack = 'Назад';
$strBinary = ' Двоичный ';
$strBinaryDoNotEdit = ' Двоичные данные - не редактируются ';
$strBookmarkDeleted = 'Закладка была удалена.';
$strBookmarkLabel = 'Метка';
$strBookmarkQuery = 'Закладка на SQL-запрос';
$strBookmarkThis = 'Закладка на данный SQL-запрос';
$strBookmarkView = 'Только просмотр';
$strBrowse = 'Обзор';
$strBzip = 'паковать в "bzip"';

$strCantLoadMySQL = 'расширение MySQL не загруженно,<br />проверьте конфигурацию PHP.';
$strCantLoadRecodeIconv = 'Не могу загрузить iconv или recode, необходимые для перекодирования символов. Проверьте php-конфигурацию и разрешите их использование или запретите перекодирование символов в phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Невозмозможно переименовать индекс в PRIMARY!';
$strCantUseRecodeIconv = 'Не могу использовать iconv функции: ни libiconv, ни recode_string, пока не будут загружены extension reports. Проверьте php-конфигурацию.';
$strCardinality = 'Количество элементов';
$strCarriage = 'Возврат каретки: \\r';
$strChange = 'Изменить';
$strChangeDisplay = 'Выберите поле для отображения';
$strChangePassword = 'Изменить пароль';
$strCheckAll = 'Отметить все';
$strCheckDbPriv = 'Проверить Привилегии Базы Данных';
$strCheckTable = 'Проверить таблицу';
$strChoosePage = 'Выберите страницу дляредактирования';
$strColumn = 'Колонка';
$strColumnNames = 'Названия колонок';
$strComments = 'Комментарии';
$strCompleteInserts = 'Полная вставка';
$strConfigFileError = 'phpMyAdmin не может прочитать данные из конфигарационного файла!  <br />Возможная причина - синтаксическая ошибка.<br />Вызовите этот файл (config.inc.php) непосредственно из броузера. Если будут сообщения об ошибках - исправьте их. Если пустая страница - все в порядке';
$strConfigureTableCoord = 'Измените координатытаблицы %s';
$strConfirm = 'Вы действительно хотите сделать это?';
$strCookiesRequired = 'Cookies должны быть включены после этого места.';
$strCopyTable = 'Скопировать таблицу в (база данных<b>.</b>таблица):';
$strCopyTableOK = 'Таблица %s была скопирована в %s.';
$strCreate = 'Создать';
$strCreateIndex = 'Создать индекс на&nbsp;%s&nbsp;колонках';
$strCreateIndexTopic = 'Создать новый индекс';
$strCreateNewDatabase = 'Создать новую БД';
$strCreateNewTable = 'Создать новую таблицу в БД %s';
$strCreatePage = 'Создать новую страницу';
$strCriteria = 'Критерий';

$strData = 'Данные';
$strDataOnly = 'Только данные';
$strDatabase = 'БД ';
$strDatabaseHasBeenDropped = 'База данных %s была удалена.';
$strDatabaseWildcard = 'База данных (возможно использование  шаблонов):';
$strDatabases = 'Базы Данных';
$strDatabasesStats = 'Статистика баз данных';
$strDefault = 'По умолчанию';
$strDelete = 'Удалить';
$strDeleteFailed = 'Неудачное удаление!';
$strDeleteUserMessage = 'Был удален пользователь %s.';
$strDeleted = 'Ряд был удален';
$strDeletedRows = 'Следующие ряды были удалены:';
$strDescending = 'Нисходящий';
$strDisplay = 'Показать';
$strDisplayOrder = 'Порядок просмотра:';
$strDisplayPDF = 'Показать PDF-схему';
$strDoAQuery = 'Выполнить "запрос по примеру" (символ подставновки: "%")';
$strDoYouReally = 'Вы действительно желаете ';
$strDocu = 'Документация';
$strDrop = 'Уничтожить';
$strDropDB = 'Уничтожить БД %s';
$strDropTable = 'Удалить таблицу';
$strDumpXRows = 'Дамп %s записей, начиная с %s.';
$strDumpingData = 'Дамп данных таблицы';
$strDynamic = 'динамический';

$strEdit = 'Правка';
$strEditPDFPages = 'Изменить PDF-страницы';
$strEditPrivileges = 'Редактирование привилегий';
$strEffective = 'Эффективность';
$strEmpty = 'Очистить';
$strEmptyResultSet = 'MySQL вернула пустой результат (т.е. ноль рядов).';
$strEnd = 'Конец';
$strEnglishPrivileges = ' Примечание: привилегии MySQL задаются по английски ';
$strError = 'Ошибка';
$strExplain = 'Эффективность SQL-запроса';
$strExport = 'Экспорт';
$strExportToXML = 'Экспорт в XML-формат';
$strExtendedInserts = 'Расширенные вставки';
$strExtra = 'Дополнительно';

$strField = 'Поле';
$strFieldHasBeenDropped = 'Поле %s было удалено';
$strFields = 'Поля';
$strFieldsEmpty = ' Пустой счетчик полей! ';
$strFieldsEnclosedBy = 'Поля заключены в';
$strFieldsEscapedBy = 'Поля экранируются';
$strFieldsTerminatedBy = 'Поля разделены';
$strFixed = 'фиксированный';
$strFlushTable = 'Сбросить кэш таблицы ("FLUSH")';
$strFormEmpty = 'Требуется значение для формы!';
$strFormat = 'Формат';
$strFullText = 'Полные тексты';
$strFunction = 'Функция';

$strGenBy = 'Созданный';
$strGenTime = 'Время создания';
$strGo = 'Пошел';
$strGrants = 'Права';
$strGzip = 'паковать в "gzip"';

$strHasBeenAltered = 'была изменена.';
$strHasBeenCreated = 'была создана.';
$strHaveToShow = 'Вы должны выбрать не менее одной колонки для отображения';
$strHome = 'К началу';
$strHomepageOfficial = 'Официальная страница phpMyAdmin';
$strHomepageSourceforge = 'Загрузка phpMyAdmin на Sourceforge';
$strHost = 'Хост';
$strHostEmpty = 'Пустое имя хоста!';

$strIdxFulltext = 'ПолнТекст';
$strIfYouWish = 'Если Вы желаете загрузить только некоторые столбцы таблицы, укажите разделенный запятыми список полей.';
$strIgnore = 'Игнорировать';
$strInUse = 'используется';
$strIndex = 'Индекс';
$strIndexHasBeenDropped = 'Индекс %s был удален';
$strIndexName = 'Имя индекса&nbsp;:';
$strIndexType = 'Тип индекса&nbsp;:';
$strIndexes = 'Индексы';
$strInsert = 'Вставить';
$strInsertAsNewRow = 'Вставить новый ряд';
$strInsertNewRow = 'Вставить новый ряд';
$strInsertTextfiles = 'Вставить текстовые файлы в таблицу';
$strInsertedRows = 'Добавленны ряды:';
$strInstructions = 'Инструкции';
$strInvalidName = '"%s" - является зарезервированным словом, вы не можете использовать его в качестви имени базы данных/таблицы/поля.';

$strKeepPass = 'Не менять пароль';
$strKeyname = 'Имя ключа';
$strKill = 'Убить';

$strLength = 'Длинна';
$strLengthSet = 'Длины/Значения*';
$strLimitNumRows = 'записей на страницу';
$strLineFeed = 'Символ окончания линии: \\n';
$strLines = 'Линии';
$strLinesTerminatedBy = 'Строки разделены';
$strLinkNotFound = 'Связь не найдена';
$strLinksTo = 'Связь с';
$strLocationTextfile = 'Месторасположение текстового файла';
$strLogPassword = 'Пароль:';
$strLogUsername = 'Пользователь:';
$strLogin = 'Вход в систему';
$strLogout = 'Выйти из системы';

$strMissingBracket = 'Missing Bracket';
$strModifications = 'Модификации были сохранены';
$strModify = 'Изменить';
$strModifyIndexTopic = 'Изменить индекс';
$strMoveTable = 'Переместить таблицы в (база данных<b>.</b>таблица):';
$strMoveTableOK = 'Таблица %s была перемещена в %s.';
$strMySQLCharset = 'MySQL-кодировка';
$strMySQLReloaded = 'MySQL перезагружена.';
$strMySQLSaid = 'Ответ MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% на %pma_s2% как %pma_s3%';
$strMySQLShowProcess = 'Показать процессы';
$strMySQLShowStatus = 'Показать состояние MySQL';
$strMySQLShowVars = 'Показать системные переменные MySQL';

$strName = 'Имя';
$strNext = 'Далее';
$strNo = 'Нет';
$strNoDatabases = 'БД отсутствуют';
$strNoDescription = 'нет описания';
$strNoDropDatabases = 'Операторы "DROP DATABASE" отключены.';
$strNoFrames = 'Для работы phpMyAdmin нужен браузер с поддержкой <b>фреймов</b>.';
$strNoIndex = 'Индекс не определен!';
$strNoIndexPartsDefined = 'Частей индекса не определено!';
$strNoModification = 'Нет изменений';
$strNoPassword = 'Без пароля';
$strNoPhp = 'без PHP-кода';
$strNoPrivileges = 'Без привилегий';
$strNoQuery = 'Нет SQL-запроса!';
$strNoRights = 'Вы не имеете достаточно прав для этого!';
$strNoTablesFound = 'В БД не обнаружено таблиц.';
$strNoUsersFound = 'Не найден пользователь.';
$strNone = 'Нет';
$strNotNumber = 'Это не число!';
$strNotSet = 'Таблица <b>%s</b> не найдена';
$strNotValidNumber = ' недопустимое количество рядов!';
$strNull = 'Ноль';
$strNumSearchResultsInTable = '%s записи(ей) в таблице <i>%s</i>';
$strNumSearchResultsTotal = '<b>Итого:</b> <i>%s</i> записи(ей)';

$strOftenQuotation = 'Обычно кавычки. ПО ВЫБОРУ означает, что только поля char и varchar заключаются в кавычки.';
$strOperations = 'Операции';
$strOptimizeTable = 'Оптимизировать таблицу';
$strOptionalControls = 'По выбору. Контролирует как читать или писать специальные символы.';
$strOptionally = 'ПО ВЫБОРУ';
$strOptions = 'Опции';
$strOr = 'Или';
$strOverhead = 'Накладные расходы';

$strPHPVersion = 'Версия PHP';
$strPageNumber = 'Номер страницы:';
$strPartialText = 'Частичные тексты';
$strPassword = 'Пароль';
$strPasswordEmpty = 'Пустой пароль!';
$strPasswordNotSame = 'Пароли не одинаковы!';
$strPdfDbSchema = 'Структура базы "%s" - страница %s';
$strPdfInvalidPageNum = 'Неопределенный номер PDF-страницы!';
$strPdfInvalidTblName = 'Таблица "%s" не существует!';
$strPhp = 'Создать PHP-код';
$strPmaDocumentation = 'Документация по phpMyAdmin';
$strPmaUriError = 'Директива <tt>$cfg[\'PmaAbsoluteUri\']</tt> должна быть установлена в Вашем конфигурационном файле!';
$strPos1 = 'Начало';
$strPrevious = 'Назад';
$strPrimary = 'Первичный';
$strPrimaryKey = 'Первичный ключ';
$strPrimaryKeyHasBeenDropped = 'Первичный ключ был удален';
$strPrimaryKeyName = 'Имя первичного ключа должно быть PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>должно</b> быть именем <b>только</b> первичного ключа!)';
$strPrintView = 'Версия для печати';
$strPrivileges = 'Привилегии';
$strProperties = 'Свойства';

$strQBE = 'Запрос по примеру';
$strQBEDel = 'Удалить';
$strQBEIns = 'Вставить';
$strQueryOnDb = 'SQL-запрос БД <b>%s</b>:';

$strReType = 'Подтверждение';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Проверить целостность данных:';
$strRelationView = 'Связанный вид';
$strReloadFailed = 'Не удалось перезагрузить MySQL.';
$strReloadMySQL = 'Перезагрузить MySQL';
$strRememberReload = 'Не забудьте перезагрузить сервер.';
$strRenameTable = 'Переименовать таблицу в';
$strRenameTableOK = 'Таблица %s была переименована в %s';
$strRepairTable = 'Починить таблицу';
$strReplace = 'Заместить';
$strReplaceTable = 'Заместить данные таблицы данными из файла';
$strReset = 'Переустановить';
$strRevoke = 'Отменить';
$strRevokeGrant = 'Отменить предоставление прав';
$strRevokeGrantMessage = 'Было отменено предоставление прав для %s';
$strRevokeMessage = 'Вы изменили привелегии для %s';
$strRevokePriv = 'Отменить привилегии';
$strRowLength = 'Длина ряда';
$strRowSize = ' Размер ряда ';
$strRows = 'Ряды';
$strRowsFrom = 'рядов от';
$strRowsModeHorizontal = 'горизонтальном';
$strRowsModeOptions = 'в %s режиме, заголовки после каждых %s ячеек';
$strRowsModeVertical = 'вертикальном';
$strRowsStatistic = 'Статистика ряда';
$strRunQuery = 'Выполнить Запрос';
$strRunSQLQuery = 'Выполнить SQL запрос(ы) на БД %ы';
$strRunning = 'на %s';

$strSQL = 'SQL';
$strSQLQuery = 'SQL-запрос';
$strSQLResult = 'SQL-результат';
$strSave = 'Сохранить';
$strScaleFactorSmall = 'Масштаб слишком маленькийдля отображения всей таблицы на однойстранице';
$strSearch = 'Искать';
$strSearchFormTitle = 'Искать в базе данных';
$strSearchInTables = 'В таблице(ах):';
$strSearchNeedle = 'Слово(а) или значение(я) дляпоиска (включая "%") в:';
$strSearchOption1 = 'хоть одно слово';
$strSearchOption2 = 'все слова';
$strSearchOption3 = 'точное соответствие';
$strSearchOption4 = 'регулярное выражение';
$strSearchResultsFor = 'Искать в "<i>%s</i>" %s:';
$strSearchType = 'Искать:';
$strSelect = 'Выбрать';
$strSelectADb = 'Выберите БД';
$strSelectAll = 'Отметить все';
$strSelectFields = 'Выбрать поля (минимум одно):';
$strSelectNumRows = 'по запросу';
$strSelectTables = 'Выберите таблицу(ы)';
$strSend = 'послать';
$strServerChoice = 'Выбор сервера';
$strServerVersion = 'Версия сервера';
$strSetEnumVal = 'Для типов поля "enum" и "set", введите значения по этому формату: \'a\',\'b\',\'c\'...<br />Если вам понадобиться ввести обратную косую черту ("\"") или одиночную кавычку ("\'") среди этих значений, поставьте перед ними обратную косую черту (например, \'\\\\xyz\' или \'a\\\'b\').';
$strShow = 'Показать';
$strShowAll = 'Показать все';
$strShowColor = 'Показать цвет';
$strShowCols = 'Показать колонки';
$strShowGrid = 'Показать сетку';
$strShowPHPInfo = 'Показать информацию о PHP';
$strShowTableDimension = 'Показать размерность таблицы';
$strShowTables = 'Показать таблицы';
$strShowThisQuery = ' Показать данный запрос снова ';
$strShowingRecords = 'Показывает записи ';
$strSingly = '(отдельно)';
$strSize = 'Размер';
$strSort = 'Отсортировать';
$strSpaceUsage = 'Используемое пространство';
$strSplitWordsWithSpace = 'Слова, разделенныепробелом (" ").';
$strStatement = 'Параметр'; // ???To translate
$strStrucCSV = 'CSV данные';
$strStrucData = 'Структура и данные';
$strStrucDrop = 'Добавить удаление таблицы';
$strStrucExcelCSV = 'CSV для данных Ms Excel';
$strStrucOnly = 'Только структуру';
$strStructPropose = 'Предлагаемая структуратаблицы (procedure analyse)';
$strStructure = 'Структура';
$strSubmit = 'Выполнить';
$strSuccess = 'Ваш SQL-запрос был успешно выполнен';
$strSum = 'Всего';

$strTable = 'таблица ';
$strTableComments = 'Комментарий к таблице';
$strTableEmpty = 'Пустое название таблицы!';
$strTableHasBeenDropped = 'Таблица %s была удалена';
$strTableHasBeenEmptied = 'Таблица %s была опустошена';
$strTableHasBeenFlushed = 'Был сброшен кэш таблицы %s';
$strTableMaintenance = 'Обслуживание таблицы';
$strTableStructure = 'Структура таблицы';
$strTableType = 'Тип таблицы';
$strTables = '%s таблиц(ы)';
$strTextAreaLength = ' Из-за большой длины,<br /> это поле не может быть отредактированно ';
$strTheContent = 'Содержимое файла было импортировано.';
$strTheContents = 'Содержимое файла замещает содержимое таблицы для рядов с идентичными первичными или уникальными ключами.';
$strTheTerminator = 'Символ окончания полей.';
$strTotal = 'всего';
$strType = 'Тип';

$strUncheckAll = 'Снять отметку со всех';
$strUnique = 'Уникальное';
$strUnselectAll = 'Снять отметку со всех';
$strUpdatePrivMessage = 'Были изменены привилегии для';
$strUpdateProfile = 'Обновить профиль:';
$strUpdateProfileMessage = 'Профиль был обновлен.';
$strUpdateQuery = 'Дополнить Запрос';
$strUsage = 'Использование';
$strUseBackquotes = 'Обратные кавычки в названиях таблиц и полей';
$strUseTables = 'Использовать таблицы';
$strUser = 'Пользователь';
$strUserEmpty = 'Пустое имя пользователя!';
$strUserName = 'Имя пользователя';
$strUsers = 'Пользователи';

$strValue = 'Значение';
$strViewDump = 'Просмотреть дамп (схему) таблицы';
$strViewDumpDB = 'Просмотреть дамп (схему) БД';

$strWelcome = 'Добро пожаловать в %s';
$strWithChecked = 'С отмеченными:';
$strWrongUser = 'Ошибочный логин/пароль. В доступе отказано.';

$strYes = 'Да';

$strZip = 'упаковать в "zip"';

//To translate:
$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';  //to translate
$strAllTableSameWidth = 'display all Tables with same width?';  //to translate
$strPdfNoTables = 'No tables';  //to translate
$strGeneralRelationFeat = 'Genereal Relation Features';  //to translate
$strDisplayFeat = 'Display Features';  //to translate
$strCreatePdfFeat = 'Creation of PDFs';  //to translate
$strColComFeat = 'Displaying Column Comments';  //to translate
$strDisabled = 'Disabled';  //to translate
$strEnabled = 'Enabled';  //to translate
$strOK = 'OK';  //to translate
$strNotOK = 'not OK';  //to translate

?>
